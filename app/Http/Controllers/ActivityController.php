<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActivityRequest;
use App\Models\Activity;
use App\Models\PatientActivity;
use App\Models\User;
use App\Notifications\NewActivity;
use App\Traits\ActivityTrait;
use App\Traits\CoreTrait;
use App\Traits\CounselorTrait;
use App\Traits\PatientTrait;
use Illuminate\Http\Request;
use Pusher\Pusher;
use Session;

class ActivityController extends Controller
{    
    use PatientTrait, CounselorTrait, ActivityTrait, CoreTrait;
    public $activity, $user, $pushConfs, $pusher, $assigned_patients;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Activity $act, PatientActivity $assigned_patients, User $users)
    {
        $this->activity = $act;
        $this->user = $users;
        $this->assigned_patients = $assigned_patients;
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
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($this->my_role() == 'patient'){
            $this->autoAssign();
        }
        $notifications = auth()->user()->notifications;
        if(auth()->user()->hasRole('counselor')){
            $activities = $this->getActivitiesForCounselor();
        }else{
            $activities = $this->getActivitiesForPatient();
        }
        
        return view('page.activity.index', compact('activities', 'notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->hasRole('counselor')){
            $users = $this->allMyPatients(auth()->user());
        }else if(auth()->user()->hasRole('patient')){
            $users = $this->getMyCounselor(auth()->user());
        }else{
            $users = $this->users->get();
        }
        return view('page.activity.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateActivityRequest $request)
    {
        try {
            $activity = $this->activity->create($request->validated());
            // dd($activity);
            foreach($request->patient_ids as $patient){
                $user = $this->user->find($patient);
    
                $this->assigned_patients->create([
                    'activity_id' => $activity->id,
                    'user_id' => $patient,
                    'counselor_id' => auth()->user()->id,
                ]);
    
                $payload = [
                    'sender_id' => auth()->user()->id,
                    'name' => auth()->user()->fname.' '.auth()->user()->lname,
                    'type' => 'new-activity',
                    'title' => $request->desc
                ];
                // Send a notification to Guest about the new homework
                // $message = 'You have a new homework with'.auth()->user()->fname.' '.auth()->user()->lname;
                // $user->notify(new NewActivity($payload));
                $this->pusher->trigger('popup-channel', 'new-activity', $patient);
                Session::flash('attention', "Activity successfully created.");
                return redirect()->route('activities.index');
            }
        } catch (\Throwable $th) {
            Session::flash('error_msg', "Oops something went wrong. #line 96.");
            return redirect()->route('activities.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = $this->activity->where('id', $id)->with('patient_activities.users')->get()->first();
        return view('page.activity.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    public function updateStatus(Request $request){
        $q = $this->activity->where('id',$request->act_id)->first();
        $q->status_id = $request->status;
        $q->save();
        return response()->json(['message' => 'Activity status updated successfully.']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = $this->activity->find($id);
        $a->delete();
        Session::flash('attention', "Activity #".$id." has been removed");
        return redirect()->route('activities.index');
    }
}
