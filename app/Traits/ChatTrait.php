<?php

namespace App\Traits;

use App\Models\Chat;
use App\Models\ChatMessages;
use App\Models\User;
use Illuminate\Http\Request;

trait ChatTrait {

    public function active_chat($id){
        return Chat::where('receiver_id', $id)
        ->where('status', 1)
        ->orderByDesc('id')
        ->first()
        ->id;
    }

    public function active_chat_data($id){
        return Chat::where('receiver_id', $id)
        ->where('status', 1)
        ->first();
    }
    
    public function active_chat_info($id){
        return Chat::where('receiver_id', auth()->user()->id)
                        ->where('status', 1)->first();
    }

    public function getChatMessages($req){
       
        $chat_id = $req->toArray()['chat_id'];
        $owner = $req->toArray()['owner'];
        
        if($owner == 'sender'){
            
            $chat_session = ChatMessages::with('user')->where('chat_id', $chat_id)->where('status', 1)->get();
            
            if($chat_session->isNotEmpty()){
                
                // The sender has seen the message
                ChatMessages::where('chat_id', $chat_id)
                ->update([
                    'status' => 0
                ]);
                return response()->json(['chat_messages' => $chat_session->toArray()], 200);
            }
            return response()->json(['chat_messages' => 0], 200);

        }elseif($owner == 'receiver'){
            
            $chat_session = ChatMessages::with('user')->where('chat_id', $chat_id)->where('status_received', 0)->get();
            
            if($chat_session->isNotEmpty()){
                // The receiver has seen the message
                ChatMessages::where('chat_id', $chat_id)
                ->update([
                    'status_received' => 1
                ]);

                return response()->json(['chat_messages' => $chat_session->toArray()], 200);
            }
            return response()->json(['chat_messages' => 0], 200);

        }
    }

}