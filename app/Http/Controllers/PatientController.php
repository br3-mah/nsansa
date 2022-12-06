<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpJunior\LaravelVideoChat\Facades\Chat;
use PhpJunior\LaravelVideoChat\Models\File\File;
use PhpJunior\LaravelVideoChat\Models\Conversation\Conversation;
use PhpJunior\LaravelVideoChat\Models\Group\Conversation\GroupConversation;

class PatientController extends Controller
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
<<<<<<< HEAD
        $groups = Chat::getAllGroupConversations();
        $threads = Chat::getAllConversations();

        // dd($threads);
        // dd($groups);
        return view('page.patients.home')->with([
            'threads' => $threads,
            'groups'  => $groups
        ]);
        // return view('page.patients.home');
=======
        $notifications = auth()->user()->unreadNotifications;
        return view('page.patients.home', compact('notifications'));
>>>>>>> ce9882ba29db51f8256621f3b7b41b267f566f79
    }

    public function patient_files()
    {
        return view('page.common.patient_files');
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
