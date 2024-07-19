<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Billing;
use App\Models\Chat;
use App\Models\PatientFile;
use App\Models\User;

class TherapyController extends Controller
{
    public $users, $pf, $appointment, $chat, $billing;

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
    public function my_role(){            
        return auth()->user()->roles->pluck('name')->first();
    }
    public function getTherapySessions($id){
        if($this->my_role() == 'patient'){
            $chats = $this->chat->where('receiver_id', $id)
            ->where('status', 1)
            ->with(['sender', 'receiver'])->get();
        }else{
            $chats = $this->chat->where('sender_id', $id)
            ->where('status', 1)
            ->with(['sender', 'receiver'])->get();
        }
        return response()->json(['data' => $chats]);
    }
}
