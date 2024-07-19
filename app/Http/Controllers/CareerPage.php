<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Questionaire;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerPage extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.careers');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function careerSurveyQuestionaire(Request $request)
    {
        // Create a session
        $key = Str::random(30);
        session(['guest_id' => $key]);

        $session = $request->session()->get('guest_id');
        // dd($session);
        // Get the Counselor Questionaire
        $questionaires = $this->questionaire->with(['questions.answers'])
        ->where('status_id', 1)->where('group_assigned', 'counselor')->first();

        return view('page.career-survey', compact('questionaires', 'session'));
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
        //
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
