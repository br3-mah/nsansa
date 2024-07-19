<?php

namespace App\Http\Controllers;

use App\Events\RealTimeNotification;
use App\Models\PushAlert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class NotificationController extends Controller
{

    public $pushConfs, $pusher, $push;

    public function __construct(PushAlert $p)
    {
        $this->pushConfs = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );
        $this->pusher = new Pusher(
            '033c1fdbd94861470759',
            '779dcdbbdd308d0dd9e9',
            '1507438',
            $this->pushConfs
        );
        $this->push = $p;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Get all notifications
        // $notifications = auth()->user()->unreadNotifications;
        $notifications = auth()->user()->notifications()->paginate(5);
        // dd($notifications);
        if($request->wantsJson()){
            return response()->json([
                "status" => 200, 
                "success" => true, 
                "message" => "Registration completed successfully", 
                "data" => $notifications
            ]);
        }else{
            return view('page.common.notifications', compact('notifications'));
        }
        
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();
    
        return response()->noContent();
    }

    public function realTimePopUps(){
        $pushConfs = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );
        $pusher = new Pusher(
            '033c1fdbd94861470759',
            '779dcdbbdd308d0dd9e9',
            '1507438',
            $pushConfs
        );
        $message = 'Welcome '.Auth::user()->fname.' '.Auth::user()->lname.' Thank you for joining';

        if(auth()->user()->first_login){
            User::where('id', auth()->user()->id)->update(['first_time'=>'false']);
            $pusher->trigger('popup-channel', 'user-register', $message);
        }

        return response()->noContent();
    }

    public function pushNotific(Request $req){
        $data = $this->push->where('for_user_id', $req->toArray()['user_id'])
                        ->where('is_seen', 0)->get();
        return response()->json(['data' => $data]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) 
    {
        $id = $request->input('id'); 
    
        auth()->user()->notifications->where('id', $id)->first()->delete();
    
        return redirect('/notifications')
            ->with('message', 'Notification deleted.');
    }
}
