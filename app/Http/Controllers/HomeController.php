<?php

namespace App\Http\Controllers;

use App\Events\RealTimeNotification;
use App\Listeners\SendNewUserNotification;
use App\Models\Appointment;
use App\Models\Chat;
use App\Models\PatientFile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\PatientTrait;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    use PatientTrait;
    public $users, $pf, $appointment, $chat;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $users, PatientFile $pf, Appointment $app, Chat $chat)
    {
        $this->middleware('auth');
        $this->appointment = $app;
        $this->users = $users;
        $this->pf = $pf;
        $this->chat = $chat;
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        // Get all chats am invited in
        $chats = $this->chat->where('sender_id', auth()->user()->id)
        ->orWhere('receiver_id', auth()->user()->id)
        ->with(['sender', 'receiver'])->get();
        // $message = 'Welcome '.Auth::user()->fname.' '.Auth::user()->lname.' Thank you for joining';
        // event(new RealTimeNotification($message));
        // check if its first time login
        $counselors =  $this->users->role('counselor')->get();
        $total_patients =  $this->getMyTotalPatients(auth()->user());
        if(auth()->user()->first_login == 'true' || auth()->user()->first_login != 0){
            $x = User::find(auth()->user()->id);
            $x->first_login = 0;
            $x->save();
            if(auth()->user()->type == 'patient'){
                return redirect()->route('pay');
            }
            return view('home', compact('notifications', 'counselors', 'total_patients'));

        }else{
            if(auth()->user()->type == 'patient'){
                return view('page.patients.home', compact('notifications','chats', 'counselors', 'total_patients'));
            }
            return view('home', compact('notifications', 'counselors', 'total_patients'));
        }

    }

    public function getMyChats(){

    }
}
