<?php

namespace App\Http\Controllers;

use App\Models\PatientQAnswers;
use App\Models\PatientQQuestions;
use App\Models\PatientQuestionnaires;
use Illuminate\Http\Request;

class PatientQuestionAnswersController extends Controller
{
    public  $questionaire;
    public  $questions;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PatientQuestionnaires $q, PatientQQuestions $qn)
    {
        $this->questionaire = $q;
        $this->questions = $qn;
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
        
        try {
            foreach ($request->all()['answer'] as $value) {
                PatientQAnswers::create([
                    'answer' => $value,
                    'question_id' => $request->question_id,
                    'user_id' => auth()->user()->id
                ]);
            }
            return redirect()->route('patient-questionaires.show', $request->all()['question'])
                ->withSuccess(__('Questionaire created successfully.'));
        } catch (\Throwable $th) {
            return redirect()->route('patient-questionaires.show', $request->all()['question'])
                ->withSuccess(__('Questionaire created successfully.'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
