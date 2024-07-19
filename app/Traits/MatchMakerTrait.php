<?php

namespace App\Traits;

use App\Models\AssignCounselor;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

trait MatchMakerTrait {
    public $user, $questions, $res, $assignPatients;
    public function __construct(User $user, Question $qn, Result $res, AssignCounselor $ac)
    {
        
        $this->user = $user;
        $this->questions = $qn;
        $this->res = $res;
        $this->assignPatients = $ac;
    }

    public function findMyCounselor(){
        // dd('here');
        $norminatedArray = [];
        $total_charge = rand(10.90, 70.89);
        // Get all Counselors with Survey answers
        $counselors = $this->user->role('counselor')->get('id')->toArray();
        // dd($counselors);
        foreach($counselors as $key => $counselor){
            $user_info = $this->user->where('id', $counselor['id'])->get()->toArray();
            // dd($user_info);
            // $get_counselor_survey = $this->res->with('question')
            //                             ->where('guest_id', $user_info[$key]['guest_id'])
            //                             ->get()->toArray();
            // dd($get_counselor_survey);

            // Get Counselor's total patients
            $count = $this->assignPatients->where('counselor_id', $counselor['id'])->get()->count();
            // dd($count);
            // Counselor patient limit exceeds?
            if($user_info[0]['patient_limit'] > $count){
                // dd('No Limit');
                // Counselor ready for more work?
                if($user_info[0]['work_status'] == 1){
                    //  dd($user_info[0]['department']);
                     $this->isDepartment($user_info[0]['department'], 8);
                    // Counselor qualified for this type of therapy
                    // if($user_info[0]['role']){
                        // dd('Qualified for this kind of therapy');
                        // Counselor charge is in range with patient invoice
                        // if($user_info[0]['hourly_charge'] <= $total_charge){
                            // Counselor charge is in range with patient invoice

                            // Add to Nominated Array
                            array_push($norminatedArray, $user_info[0]['id']);

                        // }
                    // }
                }
            } 
        }

        dd($norminatedArray);
        // Finally Assign
        AssignCounselor::create([
            'patient_id' => 8 ,
            'counselor_id' => $user_info[0]['id'],
            // 'status_id' => 1, // 1 / 2
            'status' => 1, // paid / unpaid
            // 'rate' => $total_charge, //ammount
            // 'end_date' => '2023-01-03'
        ]);

        // Increment patient limit for the Counselor
        $update = $this->user->find($counselor['id']);
        $update->patient_limit ++;
        $update->save(); 
    }


    public function getAnswer($question, $user_id){
        $id = $this->user->find($user_id)->guest_id;
        // dd();\

        // Get patient answers only
        $survey_results = Question::with("results")->whereHas("results",function($q) use($id){
            $q->where("guest_id","=",$id);
        })->get();
        // $survey_results = Result::where("guest_id",$id)_>get();
        // dd($survey_results);

        foreach($survey_results as $q){
            // dd(similar_text($q->question->result, $question, $stat));
            // if an answer is 
            if($q->question->result == 'suicidal' || $q->question->result == 'bipolar' ){
                return true;
            }else{

            }
        }
        dd($survey_results);
    }

    // Qualities
    public function isReligious(){
        // bool
    }

    public function isReligion(){

    }

    public function bondReligions(){
        // Does the patient what a counselor with same religion?

    }

    public function isGender(){
        // Male, Female, Man, Woman
        
    }
    public function isDepartment($dept, $user_id){
        // single, married, devorced, widowed, engaged, other
        // department
        // dd($dept);
        if($dept == 'Psychologist'){
            if($this->isMad($user_id)){
                return true;
            }
        }




        // switch ($dept) {
        //         case 'Psychologist':

        //             # code...
        //             break;

        //         case 'Professional Counselor':
        //             # code...
        //             break;

        //         case 'Marriage & Family Therapist':
        //             # code...
        //             break;

        //         case 'Mental Health Counselor':
        //             # code...
        //             break;

        //         case 'Clinical Social Worker':
        //             # code...
        //             break;
            
        //     default:
        //         # code...
        //         break;
        // }
    }

    public function isIdentity(){
        // Straight, Gay, Bio-sexual, Trans

    }

    public function isMad($user_id){
        // Bool
        $result = $this->getAnswer('what led you to therapy', $user_id);

    }

    public function whichCommunication(){
        // video, chat, video or
    }

    public function whichRace(){
        // race
    }

    public function whichGroup(){
        // LGBTQ, Olders, Child, Non-religious
    }

}