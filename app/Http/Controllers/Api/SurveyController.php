<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Questionaire;
use App\Models\Chat;
use App\Models\ChatMessages;
use App\Models\PatientQuestionnaires;
use App\Models\User;
use App\Traits\ActivityTrait;
use Illuminate\Support\Str;

class SurveyController extends Controller
{   
    use ActivityTrait;
    public  $questionaire;
    public  $questions;
    public  $chat;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Questionaire $q, Question $qn, Chat $chat)
    {
        $this->chat = $chat;
        $this->questionaire = $q;
        $this->questions = $qn;
    }
    
    public function getPatientSurvey(){
        $questionaires = $this->questionaire->with(['questions.answers'])
        ->where('status_id', 1)->where('group_assigned', 'patient')->first();
        return response()->json(['data' => $questionaires]);
    }

    public function getCounselorSurvey(){
        $questionaires = $this->questionaire->with(['questions.answers'])
        ->where('status_id', 1)->where('group_assigned', 'counselor')->first();
        return response()->json(['data' => $questionaires]);
    }

    public function submitPatientFeedBack(){
        // Already implemented in Original Controller
    }

    public function my_role($id){            
        return User::where('id', $id)->first()
            ->roles->pluck('name')[0];
    }

    public function getTherapySessions($id){
        if($this->my_role($id) == 'patient'){
            $chats = $this->chat->where('receiver_id', $id)
            ->where('status', 1)
            ->with(['sender', 'receiver'])->get();
        }else{
            $chats = $this->chat->where('sender_id', $id)
            ->where('status', 1)
            ->with(['sender', 'receiver'])->get();
        }
        return response()->json(['chat_session' => $chats]);
    }

    public function getTherapySessionChatMessages($chat_id, $starter){
        //get my thread for chat
        $id = $chat_id;
        $owner = $starter;
        $chat_session = Chat::with('chat_messages.user')->where('id', $id)->get()->toArray()[0];
        if($owner == 'sender'){
            // The sender has seen the message
            ChatMessages::where('chat_id', $id)
            ->update([
                'status' => 0
            ]);
        }elseif($owner == 'receiver'){
            // The receiver has seen the message
            ChatMessages::where('chat_id', $id)
            ->update([
                'status_received' => 1
            ]);
        }
        return response()->json(['chat_session' => $chat_session], 200);
    }

    // ----- Patient Questionnaires
    public function patientSurveys(){
        if($this->my_role() == 'patient'){
            $user_id = $this->getMyCounselor(auth()->user()->id);
            $questionnaires = PatientQuestionnaires::where('user_id', $user_id)
            ->with('questions')->get();
        }else{
            $questionnaires = PatientQuestionnaires::where('user_id', auth()->user()->id)
            ->with('questions')->get();
        }
        return response()->json(['questionnaires' => $questionnaires], 200);
    }

    public function submitSurvey(){
        return response()->json(['success' => 'Submitted successfully'], 200);
    }

    public function startSurvey($id){
        $questionnaires = PatientQuestionnaires::with(['questions.answers'])
        ->where('id', $id)->first();
        return response()->json(['questionnaires' => $questionnaires], 200);
    }    
    
}
