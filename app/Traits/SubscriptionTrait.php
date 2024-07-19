<?php

namespace App\Traits;

use App\Models\Appointment;
use App\Models\Billing;
use App\Models\Chat;
use App\Models\CommissionSetting;
use App\Models\PatientFile;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Livewire\WithPagination;

trait SubscriptionTrait {
    use WithPagination;
    public function get_subscriptions(){
        return Plan::with('feature')->get();
    }
    public function get_subscriptions_pg(){
        return Plan::with('feature')->paginate(10);
    }
    public function get_plan($id){
        return Plan::where('id',$id)->with('feature')->first();
    }

}