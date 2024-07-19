<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatientRecord;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Appointment;
use App\Models\Billing;
use App\Models\Chat as ModelsChat;
use App\Models\PatientFile;
use App\Models\User;
use App\Traits\BillingTrait;
use App\Traits\CoreTrait;
use App\Traits\PatientTrait;

class PatientController extends Controller
{
    use CoreTrait, PatientTrait, BillingTrait;
    public $user, $users, $u, $pf, $appointment, $chat;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $users, PatientFile $pf, Appointment $app, ModelsChat $chat)
    {
        $this->middleware('auth');
        $this->appointment = $app;
        $this->user = $users;
        $this->pf = $pf;
        $this->chat = $chat;
        $this->chat = $chat;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if($this->my_role() == 'patient'){
        //     $this->autoAssign();
        // }
        // Get all chats am invited in
        $chats = $this->get_my_chats();
        $notifications = auth()->user()->unreadNotifications;
        return view('page.patients.home', compact('notifications', 'chats'));
    }

    public function patient_files()
    {
        $counselors = $this->user->role('counselor')->get();
        $my_patients = $this->getMyPatients(auth()->user());
        return view('page.patients.patient_files', compact('my_patients', 'counselors'));
    }

    public function show_patient_files($id)
    {
        $p = $this->user->find($id);
        $patient_files = $this->user->role('patient')->where('id', $id)->with('patient_files')->get()->first();
        return view('page.patients.show_patient_files', compact('patient_files','p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $p = $this->user->find($id);
        return view('page.patients.create_patient_file', compact('p'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePatientRecord $request)
    {
        
        $this->pf->create($request->toArray());
        $updatePersonalInfo = $this->user->find($request->user_id);
        $updatePersonalInfo->mobile_no = $request->mobile_no;
        $updatePersonalInfo->address = $request->address;
        $updatePersonalInfo->blood_group = $request->blood_group;
        $updatePersonalInfo->save();
        return redirect()->route('all-patient-files', $request->user_id)
            ->withSuccess(__('New patient record created successfully.'));
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = $this->pf->where('id', $id)->with('user')->first();        
        // refactor
        $appointments = $this->appointment->where('user_id', auth()->user()->id)->get();
        return view('page.patients.show_patient_file', compact('p','appointments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // refactor
        $p = $this->pf->where('id', $id)->with('user')->first();

        return view('page.patients.edit_patient_file', compact('p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, $id)
    {
        // $this->pf->update($request->validated());
        $updatePatientFile = $this->pf->find($id);
        $updatePatientFile->condition = $request->condition;
        $updatePatientFile->treatment = $request->treatment;
        $updatePatientFile->bp_level = $request->bp_level;
        $updatePatientFile->infection = $request->infection;
        $updatePatientFile->comments = $request->comments;
        $updatePatientFile->save();

        $updatePersonalInfo = $this->user->find($request->user_id);
        $updatePersonalInfo->mobile_no = $request->mobile_no;
        $updatePersonalInfo->address = $request->address;
        $updatePersonalInfo->blood_group = $request->blood_group;
        $updatePersonalInfo->save();

        return redirect()->route('all-patient-files', $request->user_id)
        ->withSuccess(__('Record updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        $this->pf->where('id', $id)->first()->delete();
        return redirect()->back()
            ->with('message', 'Notification deleted.');
    }
}
