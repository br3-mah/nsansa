<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatMessages;
use App\Models\SessionNote;
use App\Models\User;
use App\Traits\ChatTrait;
use Illuminate\Http\Request;
use Session;

class ChatController extends Controller
{
    use ChatTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        // Get my thread for chat
        $id = $req->toArray()['id'];
        $owner = $req->toArray()['owner'];

  // Get the chat sessions
        $chat_session = Chat::with('chat_messages.user')->where('id', $id)->get()->toArray()[0];      

        // Set that either parties have seen the message
        // The last message has appeared in either parties chat
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
    
    public function session_notes($id)
    {
        $chat =Chat::where('id', $id)->where('status', 1)->first();
        $notes = SessionNote::where('chat_id', $id)->where('status', 1)->first();
        $user = User::where('id', $chat->receiver_id)->first();

        return view('page.patients.session_notes', compact('notes', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Save the new message
            ChatMessages::firstOrCreate($request->toArray());
            return response()->json(200);
        } catch (\Throwable $th) {
            return response()->json(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //get my thread for chat
        // $id = $request->toArray()['id'];
        // $chat_session = Chat::with('chat_messages')->whereHas("chat_messages",function($q) use($id){
        //     $q->where("status","=", 1);
        // })->where('id', $id)->get()->toArray()[0];
        // dd($chat_session);
        // return response()->json(['chat_session' => $chat_session], 200);
    }

    public function stream(Request $req){
        if (!empty($req->toArray())) {
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
        return response()->json(['chat_messages' => 0], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $chat = Chat::where('id', $request->toArray()['chat_id'])->first();
            $chat->room_id = $request->toArray()['room_id'];
            $chat->save();
            return response()->json(200);
        } catch (\Throwable $th) {
            return response()->json(500);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $chat = Chat::where('id', $id)->first();
            $chat->is_active = 0;
            $chat->save();
            return response()->json(200);
        } catch (\Throwable $th) {
            return response()->json(500);
        }
    }
}
