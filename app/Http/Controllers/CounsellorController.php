<?php

namespace App\Http\Controllers;

use App\Models\SessionUsage;
use App\Models\User;
use Illuminate\Http\Request;

class CounsellorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');

    }
    public function profiles()
    {
        
        $counselors = User::role('counselor')->get();
        return view('page.counselors.index', compact('counselors'));

    }

    public function patient_files()
    {
        return view('page.common.patient_files');
    }

    public function details($id) 
    {
        $videocalls = SessionUsage::where('counselor_id', $id)->get();
        $user = User::with('myfiles')->where('id', $id)->first();
        return view('page.counselors.details', [
            'user' => $user,
            'videocalls' => $videocalls,
        ]);
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
