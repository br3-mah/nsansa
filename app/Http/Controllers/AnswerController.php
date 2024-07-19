<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnswerRequest;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Solutions\SolutionProviders\IncorrectValetDbCredentialsSolutionProvider;
use Session;
class AnswerController extends Controller
{
    
    public  $answers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Answer $answers)
    {
        $this->answers = $answers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validated();
        foreach ($request->all()['answer'] as $value) {
            Answer::create([
                'answer' => $value,
                'question_id' => $request->question_id,
                'user_id' => Auth::user()->id
            ]);
        }
        return redirect()->route('questionaires.show', $request->all()['question'])
            ->withSuccess(__('Questionaire created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        // dd($request);
        try {
            $answer->answer = $request->toArray()['edited_answer'];
            $answer->save();
            return response()->json(['message' => 'success.']);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'failed.']);
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {

    }
    public function customDestroy($answer, $question)
    {
        $del = $this->answers->findOrFail($answer);
        $del->delete();
        return redirect()->route('questionaires.show', $question)
            ->withSuccess(__('Questionaire removed successfully.'));
    }
}
