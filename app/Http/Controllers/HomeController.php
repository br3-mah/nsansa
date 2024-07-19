<?php

namespace App\Http\Controllers;

use App\Events\RealTimeNotification;
use App\Listeners\SendNewUserNotification;
use App\Models\Appointment;
use App\Models\Billing;
use App\Models\Chat;
use App\Models\PatientFile;
use App\Models\User;
use App\Traits\BillingTrait;
use App\Traits\CoreTrait;
use Illuminate\Http\Request;
use App\Traits\PatientTrait;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    use CoreTrait, PatientTrait, BillingTrait;
    public $users, $pf, $appointment, $chat, $billing;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $users, PatientFile $pf, Appointment $app, Chat $chat, Billing $billing)
    {
        $this->middleware('auth');
        $this->appointment = $app;
        $this->users = $users;
        $this->pf = $pf;
        $this->billing = $billing;
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
        if($this->my_role() == 'patient'){
            return redirect()->route('patient');
        }
        
        $notifications = auth()->user()->unreadNotifications;
        $chats = $this->get_my_chats();
        $counselors =  $this->users->role('counselor')->get();
        $total_patients =  $this->getMyTotalPatients(auth()->user());
        $total_income = 0;
        // $total_income = $this->total_income();
        
        return view('home', compact('notifications', 'chats', 'counselors', 'total_patients','total_income'));
    }

    public function getMyChats(){

    }
}
