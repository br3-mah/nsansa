<?php

namespace App\Traits;

use App\Models\PatientActivity;

trait ActivityTrait {

    public function getActivitiesForCounselor(){
        return PatientActivity::where('counselor_id', auth()->user()->id)
            ->with('activities.users')->with('activities.counselor')->get();
    }

    public function getActivitiesForPatient(){
        return PatientActivity::where('user_id', auth()->user()->id)
        ->with('activities.users')->with('activities.counselor')->get();  
    }
    public function getActivitiesForPatientApi($id){
        return PatientActivity::where('user_id', $id)
        ->with('activities.users')->with('activities.counselor')->get();  
    }

}