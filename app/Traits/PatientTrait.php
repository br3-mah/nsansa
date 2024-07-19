<?php

namespace App\Traits;

use App\Models\AssignCounselor;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Chat;
use App\Models\PatientFile;
use App\Models\User;

trait PatientTrait {
    public $users, $u, $pf, $ac, $appointment;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $users, PatientFile $pf, Appointment $app, AssignCounselor $ac)
    {
        $this->middleware('auth');
        $this->appointment = $app;
        $this->user = $users;
        $this->pf = $pf;
        $this->ac = $ac;
    }

    // Return all your patients with their user info, file records
    public function getMyPatients($u){
        if($u->hasAnyRole(['admin','administrator'])){
            $my_patients = $this->user->role('patient')->with('assignedCounselor')->orderBy('fname', 'asc')->paginate(6);
        }else{
            $my_patients = $this->user->role('patient')->whereHas('assignedCounselor', function ($query) use ($u) {
                $query->where('counselor_id', $u->id);
                $query->where('status', 1);
            })->orderBy('fname', 'asc')->paginate(6);
        }
        return $my_patients;
    }



    public function allMyPatients($u){
        if($u->hasAnyRole(['admin','administrator'])){
            $my_patients = $this->user->role('patient')->with('assignedCounselor')->get();
        }else{
            $my_patients = $this->user->role('patient')->whereHas('assignedCounselor', function ($query) use ($u) {
                $query->where('counselor_id', $u->id);
            })->get();
        }
        return $my_patients;
    }



    // Return all your patients with their user info, file records
    public function getMyTotalPatients($u){
        if($u->hasAnyRole(['admin','administrator'])){
            $total = User::role('patient')->get()->count();
        }else{
            $total = AssignCounselor::where('counselor_id', $u->id)->get()->count();
        }
        return $total;
    }


    public function myCurrentCounselor(){
        // Get my current counselor
        $data = Chat::where('receiver_id', auth()->user()->id)->where('status', 1)->first();
        // dd($data);
        return $data;
    }

}