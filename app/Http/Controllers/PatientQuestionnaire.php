<?php

namespace App\Http\Controllers;

use App\Models\PatientQQuestions;
use App\Models\PatientQuestionnaires;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class PatientQuestionnaire extends Controller
{

    public  $questionaire;
    public  $questions;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PatientQuestionnaires $pq, PatientQQuestions $pqq)
    {
        $this->questionaire = $pq;
        $this->questions = $pqq;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start($id)
    {
        $session = auth()->user()->id;
        $questionaires = $this->questionaire->with(['questions.answers'])
        ->where('id', $id)->first();
        return view('page.patient_questions.start-questions', 
            compact('questionaires', 'session')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $u = auth()->user();
        $users =  User::role('patient')->whereHas('assignedCounselor', function ($query) use ($u) {
            $query->where('counselor_id', $u->id);
        })->get();
        return view('livewire.admin.patient.patient-create-survey',[
            'users'=>$users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientQQuestions $question, Request $request)
    {
        $data = $request->toArray();
        // dd(json_encode($data['patient_ids']));
        try{
           
            $survey = PatientQuestionnaires::create([
                'name' => $data['name'],
                'user_id' => auth()->user()->id,
                'patients' => json_encode($data['patient_ids']),
                'status' => 1
            ]);
        
            foreach ($request->question as $key => $value) {
                $question->create([
                    'question' => $value,
                    'type' => $request->type[$key],
                    'questionaire_id' => $survey->id
                ]);
            }

            Session::flash('attention', "Questionnaire created successfully.");
            return redirect()->route('my-patient-questionnaires');
        }catch (\Throwable $th) {
            dd($th);
            Session::flash('error_msg', "Oops something went wrong again.");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questionaires = $this->questionaire->with('questions.answers')
                            ->where('id', $id)->first();
        return view('page.patient_questions.edit_questions', compact('questionaires'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = $this->questions->with(['answers'])->where('id', $id)->first();
        return view('page.patient_questions.edit_answers', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function responses($id){
        $row = $this->questionaire->where('id', $id)->first();
        $string = $row->patients;
        $string = str_replace("'", '"', $string); // Replace single quotes with double quotes
        $array = json_decode($string);
        $patients = User::whereIn('id', $array)->get();
        return view('livewire.admin.patient.patient-responses',[
            'patients' => $patients,
            'questionnaire_id' => $id
        ]);
    }

    public function patientResponse($id){
        $user = User::where('id', $id)->first();

        // get the active survey
        $survey_results = $this->questions->with("results")->get();

        return view('livewire.admin.patient.response',[
            'user' => $user,
            'survey_results' => $survey_results
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
