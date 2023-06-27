<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Async;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;

class VideoCallController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Chat::getAllGroupConversations();
        $threads = Chat::getAllConversations();

        return view('home')->with([
            'threads' => $threads,
            'groups'  => $groups
        ]);
    }

    public function chat($id)
    {
        $conversation = Chat::getConversationMessageById($id);


        return view('page.chat.chat')->with([
            'conversation' => $conversation
        ]);
    }

    public function startVideo($id){
        $conversation = Chat::getConversationMessageById($id);

        return view('page.common.video-call')->with([
            'conversation' => $conversation
        ]);
    }

    public function startVideoCall($id, $chat_id, $receiver, $role){
        try {
            $data = [
                'id' => $id,
                'chat_id' => $chat_id,
                'receiver' => $receiver,
                'role' => $role,
                'token' =>  csrf_token()
            ];
            return view('page.chat.video_', compact('data'));
        } catch (\Throwable $th) {
            dd('Refresh the Page');
        }
    }

    public function startPhoneCall($id, $chat_id, $receiver, $role){
        try {
            $data = [
                'id' => $id,
                'chat_id' => $chat_id,
                'receiver' => $receiver,
                'role' => $role,
                'token' =>  csrf_token()
            ];
            return view('page.chat.phone_', compact('data'));
        } catch (\Throwable $th) {
            dd('Refresh the Page');
        }
    }

    public function sharePeerId(Request $req){
        $async = Async::where('chat_id', $req->toArray()['info']['chat_id']);
        $async->delete();
        Async::create([
            'name' => 'Activate Video Call Button',
            'value' => $req->toArray()['peer_id'],
            'chat_id' => $req->toArray()['info']['chat_id'],
            'user_id' => auth()->user()->id,
            'status' => 1
        ]);
    }

    public function getVideoLink(Request $req){
        $data = Async::where('chat_id', $req->toArray()['chat_id'])->get()->first();
        return response()->json(['data' => $data], 200);
    }

    public function startVideoCallPeer($id, $chat_id, $receiver, $role, $peer_id){
        try {
            $data = [
                'id' => $id,
                'chat_id' => $chat_id,
                'receiver' => $receiver,
                'role' => $role,
                'token' =>  csrf_token(),
                'peer_id' => $peer_id
            ];
            return view('page.chat.video_', compact('data'));
        } catch (\Throwable $th) {
            dd('Refresh the Page');
        }
    }

    public function startVideoCallPeer2($id, $chat_id, $receiver, $role, $peer_id){
        try {
            $data = [
                'id' => $id,
                'chat_id' => $chat_id,
                'source' => $receiver,
                'role' => $role,
                'token' =>  csrf_token(),
                'peer_id' => $peer_id
            ];
            return view('page.chat.video-appointment_', compact('data'));
        } catch (\Throwable $th) {
            dd('Refresh the Page');
        }
    }

    public function activeVideoCall(){
        return view('page.chat.video_chat');
    }


    public function upload(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'video' => 'required|mimetypes:video/webm|max:500000', // Adjust max size as per your requirement
            ]);

            // Store the uploaded file
            $path = $request->file('video')->store('videos');

            // Create a new video record in the database
            $video = new Video();
            $video->file_name = $request->file('video')->getClientOriginalName();
            $video->file_path = $path;
            $video->user_id = auth()->id(); // Assuming you have user authentication
            $video->save();

            // Return a response or redirect as needed
            return response()->json([
                'message' => 'Video uploaded successfully',
            ]);
        } catch (\Throwable $th) {
            dd($th);
            // return response()->json([
            //     'message' => 'Video uploaded successfully',
            // ]);
        }
    }
    
}
