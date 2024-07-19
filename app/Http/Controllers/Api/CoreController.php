<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AssignCounselor;
use App\Models\Availability;
use App\Models\Chat;
use App\Models\Department;
use App\Models\MyFile;
use App\Models\User;
use App\Notifications\CounselorAssigned;
use App\Notifications\NewPatientAssigned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoreController extends Controller
{
    public function unsignedPatients(){
        try {
            $data = [];
            $patients = User::role('patient')->without('assignedCounselor')->get();
            
            foreach ($patients as $key => $p) {
                $survey_results = DB::table('questions')
                    ->join('results', 'questions.id', '=', 'results.question_id')
                    ->where('results.guest_id', '=', $p->guest_id)
                    ->select('questions.question', 'results.user_answer')
                    ->get()
                    ->toArray();
            
                // Create an associative array with patient and survey results
                if (!empty($survey_results)) {
                    $patientData = [
                        'patient' => $p,
                        'survey_results' => $survey_results,
                    ];
            
                    // Push the associative array to the $data array
                    $data[] = $patientData;
                }
            }
            return response()->json(['data' => $data], 200);
        
        } catch (\Throwable $th) {
            dd($th);
        }
    }


    public function getCounselors(){
        try {
            $data = [];
            $counselors = User::role('counselor')->with('myfiles')->get();
            
            foreach ($counselors as $key => $c) {
                $survey_results = DB::table('questions')
                    ->join('results', 'questions.id', '=', 'results.question_id')
                    ->where('results.guest_id', '=', $c->guest_id)
                    ->select('questions.question', 'results.user_answer')
                    ->get()
                    ->toArray();
                    // Create an associative array with patient and survey results
                    $avdates = Availability::where('user_id', $c->id)
                    ->where('av_date', '>=', now()->toDateString())
                    ->get();
                    // if (!empty($mf)) {
                        $counselorData = [
                            'counselor' => $c,
                            'survey_results' => $survey_results,
                            'availability' => $avdates,
                        ];
                
                        // Push the associative array to the $data array
                        $data[] = $counselorData;
                    // }
            }

            // dd($data);
            return response()->json(['data' => $data], 200);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function getDepartments(){
        $data = Department::get();
        return response()->json(['data' => $data], 200);
    }


    public function assignCounselor($patient_id, $counselor_id){
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
            return response()->json(['message' => 'Counselor has been assign successfully'], 200);
        } catch (\Throwable $th) {
            dd($th);                        
            return response()->json(['message' => 'Failed'], 500);

        }
    }

    public function availableTimeSlots(Request $request){
        dd($request);
    }
}
