<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestionaireRequest;
use App\Models\Question;
use App\Models\Questionaire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Session;

class QuestionaireController extends Controller
{
    public  $questionaire;
    public  $questions;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Questionaire $q, Question $qn)
    {
        $this->questionaire = $q;
        $this->questions = $qn;
    }

    public function index()
    {
        $questionaires = $this->questionaire->with('questions')->paginate(7);
        return view('page.questionaires.index', compact('questionaires'));
    }

    public function feed()
    {
        // get the active survey
        $roles = Role::orderBy('id','DESC')->paginate(5);
        $users = User::latest()->paginate(7);
        return view('page.questionaires.user_feedback', compact('roles', 'users'));
    }

    public function user_feed($id)
    {
        $user = User::where('guest_id', $id)->first();
        $survey_results = DB::table('questions')
        ->join('results', 'questions.id', '=', 'results.question_id')
        ->where('results.guest_id', '=', $id)
        ->select('questions.*', 'results.*')
        ->get();

        return view('page.questionaires.results', compact('survey_results', 'user'));
    }

    public function updateStatus(Request $request){
        $q = $this->questionaire->findOrFail($request->user_id);
        $q->status_id = $request->status;
        $q->save();

        if($request->status == 1){
            $others = $this->questionaire->where('group_assigned', $q->group_assigned)
            ->where('id', '!=' , $q->id )->get();
            $others->status_id = 0;
            $others->save();
        }
        return response()->json(['message' => 'User status updated successfully.']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.questionaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Question $question, CreateQuestionaireRequest $request)
    {
        try{
            $survey = $this->questionaire->create($request->validated());
            foreach ($request->question as $key => $value) {
               
               $question->create([
                    'question' => $value,
                    'type' => $request->type[$key],
                    'questionaire_id' => $survey->id    
                ]);
            }
            Session::flash('attention', "Questionnaire created successfully.");
            return redirect()->route('questionaires.index');
            // return redirect()->route('questionaires.index');
        }catch (\Throwable $th) {
            dd($th);
            Session::flash('error_msg', "Oops something went wrong again.");
            return redirect()->route('questionaires.index');
        }
    }

    public function addQuestions($qid){
        return view('page.questionaires.create-question',[
            'questionnaire_id'=> $qid
        ]);
    }

    public function saveQuestions(Request $request){
        try {
            foreach ($request->question as $key => $value) {
                Question::create([
                    'question' => $value,
                    'type' => $request->type[$key],
                    'questionaire_id' => $request->questionnaire_id    
                ]);
            }
            return redirect()->route('questionaires.show', $request->questionnaire_id);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */

    //  Show the questions and answers
    public function show($id)
    {
        $questionaires = $this->questionaire->with('questions.answers')->where('id', $id)->first();
        return view('page.questionaires.edit_answers', compact('questionaires'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = $this->questions->with(['answers'])->where('id', $id)->first();
        
        return view('page.questionaires.edit', compact('question'));
    }


    public function update_question(Request $request, $id){
        try {
            $question = Question::where('id', $id)->first();
            $question->question = $request->toArray()['edited_question'];
            $question->save();
            return response()->json(['message' => 'success.', 'data' => $request->toArray()['edited_question']]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'failed.']);
        }
    }

    public function updateQType(Request $request){
      try {
        $question = Question::where('id', $request->toArray()['data_id'])->first();
        $question->type = $request->toArray()['question_type'];
        $question->save();
        return response()->json(['message' => 'success.']);
      } catch (\Throwable $th) {
        return response()->json(['message' => 'failed.']);
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function changeAudience(Request $request, Questionaire $questionaire)
    {
        try {
            $id = $request->toArray()['q_id'];
            $data = $questionaire->where('id', $id)->first();
            $data->group_assigned = $request->toArray()['audience'];
            $data->save();

            Session::flash('attention', "Audience changed successfully.");
            return redirect()->route('questionaires.index');
        } catch (\Throwable $th) {
            Session::flash('err_msg', "Cannot change audience, failed.");
            return redirect()->route('questionaires.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionaire $questionaire)
    {
        $questionaire->delete();
        Session::flash('attention', "Questionnaire removed successfully.");
        return redirect()->route('questionaires.index');
    }

    
    public function questionDestroy($question, $questionnaire)
    {
        
        $q = $this->questions->where('questionaire_id', $questionnaire)->count();
        if($q == 1){
            $qn = $this->questionaire->where('id', $questionnaire)->first();
            $qn->delete();
            return redirect()->route('questionaires.index');
        }
        $del = $this->questions->findOrFail($question);
        $del->delete();
        Session::flash('attention', "Questionnaire removed successfully.");
        return redirect()->route('questionaires.show', $questionnaire);
    }
}
