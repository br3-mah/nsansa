<?php

namespace App\Traits;

use App\Models\Appointment;
use App\Models\AssignCounselor;
use App\Models\Billing;
use App\Models\Chat;
use App\Models\Payment;
use App\Models\User;
use App\Notifications\CounselorAssigned;
use App\Notifications\NewPatientAssigned;
use Illuminate\Support\Facades\Http;
use React\Http\Io\Transaction;

trait CoreTrait {

        public function my_role(){            
            return auth()->user()->roles->pluck('name')->first();
        }

        public function total_income(){
            if($this->role() == 'patient'){
               
            }elseif($this->role() == 'counselor'){
                
            }else{
                $billings = Billing::with('payments')->where('status', 2)->get();
                $total = 0;
                
                foreach ($billings as $billing) {
                    $total += $billing->payments->sum('amount');
                }
                
                return $total;
            }
        }

        public function get_my_chats(){
            if($this->my_role() == 'patient'){
                $chats = Chat::where('receiver_id', auth()->user()->id)
                ->where('status', 1)
                ->with(['sender', 'receiver'])->get();
            }else{
                $chats = Chat::where('sender_id', auth()->user()->id)
                ->where('status', 1)
                ->with(['sender', 'receiver'])->get();
            }

            return $chats;
        }

        public function get_my_appointments(){
            $data = Appointment::where('user_id', auth()->user()->id)->get();
            return $data;
        }

        public function autoAssign(){
            
            $check = Chat::where('receiver_id', auth()->user()->id)
            ->orWhere('status', 1)
            ->orWhere('status', 3)
            ->first();
            // dd($check == null);
            if($check == null){
                // Get approved counselor who have one client
                $counselor = User::role('counselor')
                ->whereHas('myfiles')
                ->where('status', 1)
                ->whereNotNull('department')
                ->get();
                
                if ($counselor->count() > 0) {
                    // Get a random counselor from the collection
                    $c = $counselor->random();
                    // Make the API call
                    $response = $this->assignCounselor(auth()->user()->id, $c->id);

                    // Check the response status and handle accordingly
                    return $response;
                } else {
                    // Handle the case when no counselors are available
                    return false;
                }
            }else{
                return false;
            }
        }

        public function assignCounselor($patient_id, $counselor_id){
            // dd($patient_id.' '.$counselor_id);
            // Save the new message
            $check = AssignCounselor::where('patient_id', $patient_id)->first();
            if($check != null){
                AssignCounselor::where('patient_id', $patient_id)->delete();
            }
            $assign = AssignCounselor::create([
                'patient_id'=>$patient_id,
                'counselor_id'=>$counselor_id
            ]);
            Chat::create([
                'sender_id' => $counselor_id,
                'receiver_id' => $patient_id,
                'status' => 3, //Not accepted yet
                'assign_id' => $assign->id //Not accepted yet
            ]);
            $message = [
                'sender_id' => $counselor_id,
                'patient_id' => $patient_id,
                'name' => 'Nsansa wellness',
                'sender' => 'Nsansa Wellness Group'
            ];
    
            try {
                User::find($counselor_id)->notify(new NewPatientAssigned($message));
                User::find($patient_id)->notify(new CounselorAssigned($message));
                return true;
            } catch (\Throwable $th) {
                dd($th);                        
                return false;
    
            }
        }
        
}