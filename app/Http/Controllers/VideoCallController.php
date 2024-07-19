<?php

namespace App\Http\Controllers;

use App\Models\Async;
use App\Models\Billing;
use App\Models\Chat;
use App\Models\Plan;
use App\Models\SessionNote;
use App\Models\SessionUsage;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Traits\CoreTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use FFMpeg\FFMpeg;
use FFMpeg\Format\Audio\Mp3;

class VideoCallController extends Controller
{
    use CoreTrait;
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
    public function takeNote(Request $req)
    {
        
        DB::beginTransaction();
        try {
            // SessionNote::create($req->toArray);
            SessionNote::updateOrCreate(
                ['chat_id' => $req->toArray()['chat_id']], // Condition to find an existing record (e.g., based on 'id')
                $req->toArray() // Data to be saved or updated
            );
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
        }
    }

    public function startVideoCall($id, $chat_id, $receiver, $role){
        try {
            $notes = SessionNote::where('chat_id', $chat_id)->where('status', 1)->first();
            if($notes !== null){
                $nts = $notes->notes;
            }
            $data = [
                'id' => $id,
                'chat_id' => $chat_id,
                'receiver' => $receiver,
                'role' => $role,
                'notes' => $nts ?? '',
                'token' =>  csrf_token()
            ];
            return view('page.chat.video_', compact('data'));
        } catch (\Throwable $th) {
            dd($th);
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
            $notes = SessionNote::where('chat_id', $chat_id)->where('status', 1)->first();
            // $
            if($notes !== null){
                $nts = $notes->notes;
            }
            $data = [
                'id' => $id,
                'chat_id' => $chat_id,
                'source' => $receiver,
                'role' => $role,
                'notes' => $nts ?? '',
                'token' =>  csrf_token(),
                'peer_id' => $peer_id
            ];


            if($this->my_role() == 'patient'){
                // Allow patient only if there have paid
                if(true){
                    return view('page.chat.video-appointment_', compact('data'));
                }else{
                    Session::flash('error_msg', "You may have no active subscription package.");
                    return redirect()->back();
                }
            }else{
                return view('page.chat.video-appointment_', compact('data'));
            }
        } catch (\Throwable $th) {
            Session::flash('attention', "Try again now.");
            return redirect()->back();
        }
    }

    public function startPhoneCallPeer2($id, $chat_id, $receiver, $role, $peer_id){
        
        try {
            $notes = SessionNote::where('chat_id', $chat_id)->where('status', 1)->first();
            if($notes !== null){
                $nts = $notes->notes;
            }
            $data = [
                'id' => $id,
                'chat_id' => $chat_id,
                'source' => $receiver,
                'role' => $role,
                'notes' => $nts ?? '',
                'token' =>  csrf_token(),
                'peer_id' => $peer_id
            ];
            if($this->my_role() == 'patient'){
                // Allow patient only if there have paid
                if(true){
                    return view('page.chat.phone-appointment_', compact('data'));
                }else{
                    Session::flash('error_msg', "You may have no active subscription package.");
                    return redirect()->back();
                }
            }else{
                return view('page.chat.phone-appointment_', compact('data'));
            }
        } catch (\Throwable $th) {
            Session::flash('attention', "Try again now.");
            return redirect()->back();
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

            // Store the uploaded file -- OLD
            $path = $request->file('video')->store('videos');
            $chat = Chat::where('id', $request->toArray()['chat_id'])->with('receiver')->first();
            // Create a new video record in the database
            Video::create([
                'file_name' => $request->file('video')->getClientOriginalName(),
                'file_path' => $path,
                'user_id' => auth()->id(),
                'user_id' => auth()->id(),
                'chat_id' => $request->toArray()['chat_id'],
                'description' => $chat->receiver->fname.' '.$chat->receiver->lname.' Session'
            ]);
            
            // NEW
            // Store the uploaded file
            // $path = $request->file('video')->store('videos');

            // Convert the video to MP3 format
            // $audioPath = $this->convertToMp3($path);


            // $chat = Chat::where('id', $request->toArray()['chat_id'])->with('receiver')->first();
            
            // // Create a new video record in the database
            // Video::create([
            //     'file_name' => pathinfo($audioPath, PATHINFO_BASENAME), // Using the converted audio file name
            //     'file_path' => $audioPath,
            //     'user_id' => auth()->id(),
            //     'user_id' => auth()->id(),
            //     'chat_id' => $request->toArray()['chat_id'],
            //     'description' => $chat->receiver->fname.' '.$chat->receiver->lname.' Session'
            // ]);

            // Return a response or redirect as needed
            return response()->json([
                'message' => 'Video uploaded successfully',
            ]);
        } catch (\Throwable $th) {
            // dd($th);
            return response()->json([
                'message' => 'Video upload failed',
            ]);
        }
    }


    // public function convertToMp3($videoPath)
    // {
        
    //     $ffmpeg = FFMpeg::create();
    //     $video = $ffmpeg->open(storage_path('app/' . $videoPath));
    //     $audioPath = 'audios/' . pathinfo($videoPath, PATHINFO_FILENAME) . '.mp3'; // Adjust the output path as needed
    
    //     $format = new Mp3();
    //     $format->setAudioChannels(2)
    //            ->setAudioKiloBitrate(256);
    
    //     $video->save($format, storage_path('app/' . $audioPath));
    
    //     return $audioPath;
    // }

    public function view_recordings(Request $request){
        
        $videos = Video::where('user_id', auth()->user()->id)->get();
        return view('page.patients.recordings', compact('videos'));
    }

    public function closeCall(Request $request){
        $chat = Chat::where('id', $request->toArray()['chat_id'])->with('receiver')->first();
        $b = Billing::current_bill();
        $p = Plan::with('feature')->where('id', $b->plan_id)->first();
        $data = SessionUsage::create([
            // 'time' => $chat->id,
            'chat_id' => $chat->id,
            'patient_id' => $chat->receiver_id,
            'counselor_id' => $chat->sender_id,
            'package_id' => $b->plan_id
        ]);

        // Close video package
        $filteredFeatures = $p->feature->filter(function ($item) {
            return str_contains(strtolower($item->desc), 'session');
        })->map(function ($item) {
            preg_match('/\d+/', $item->desc, $matches);
            return $matches[0] ?? null;
        })->filter(); 
        
        $s = SessionUsage::where('package_id', $b->plan_id)->count();
        if((int)$filteredFeatures[1] >= $s){
            $b->can_video_call = false;
            $b->save();
        }

        return response()->json(['su_id' => $data->id]);
    }

    public function rateCall(Request $request){
        $data = SessionUsage::where('patient_id', auth()->user()->id)
                ->orderBy('id', 'desc')->first();
        $data->rating = $request->toArray()['rating'];
        $data->save();
    }
    
}
