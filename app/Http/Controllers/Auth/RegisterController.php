<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MyFile;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserFile;
use App\Notifications\NewUserNotification;
use App\Notifications\NsansaWellnessCounselor;
use App\Notifications\Welcome;
use App\Traits\CoreTrait;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Pusher\Pusher;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectToCounsellor = RouteServiceProvider::COUNSELLOR;
    protected $redirectToPatient = RouteServiceProvider::PATIENT;
    protected $redirectToPayments = RouteServiceProvider::PAY;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        
        // DB::beginTransaction();
        try {
            $admin = User::first();
            $user = User::create([
                'fname' => $data['fname'],
                'lname' => $data['lname'],
                'email' => $data['email'],
                'username' => $data['email'],
                'type' => $data['type'],
                'guest_id' => $data['guest_id'],
                'password' => bcrypt($data['password']),
                'liecense_number' => $data['liecense'] ?? 000000,
                'department' => $data['role']
                // 'mobile_no' => $data['mobile_no'],
                // 'state' => $data['state'],
                // 'active' => 0,
                // 'password' => Hash::make($data['password']),
                // 'password' => Hash::make($data['password']),
            ]);

            if($data['type'] != 'patient'){
                $mf = MyFile::create([
                    'user_id' => $user->id
                ]);

                if (array_key_exists('nrc_doc', $data)) {
                    $nrcDoc = $data['nrc_doc'];
        
                    if ($nrcDoc instanceof \Illuminate\Http\UploadedFile && $nrcDoc->isValid()) {
                        $path = Storage::disk('public')->putFile('ufiles', $nrcDoc);
        
                        // Store the $path in your database or perform other actions related to the uploaded file
                        $mf->nrc_file = $path;
                        $mf->save();
                    }
                }
                if (array_key_exists('cv_doc', $data)) {
                    $cvDoc = $data['cv_doc'];
        
                    if ($cvDoc instanceof \Illuminate\Http\UploadedFile && $cvDoc->isValid()) {
                        $path = Storage::disk('public')->putFile('ufiles', $cvDoc);
        
                        // Store the $path in your database or perform other actions related to the uploaded file
                        $mf->cv_file = $path;
                        $mf->save();
                    }
                }
                if (array_key_exists('cert_doc', $data)) {
                    $certDoc = $data['cert_doc'];
        
                    if ($certDoc instanceof \Illuminate\Http\UploadedFile && $certDoc->isValid()) {
                        $path = Storage::disk('public')->putFile('ufiles', $certDoc);
        
                        // Store the $path in your database or perform other actions related to the uploaded file
                        $mf->cert_file = $path;
                        $mf->save();
                    }
                }
            }
            
            
            $payload = [
                'sender_id' => $user->id,
                'name' => $user->fname.' '.$user->lname,
                'sender' => 'Nsansa Wellness Group'
            ];

            if($data['type'] == 'patient'){
                $user->assignRole('patient');
                $message = 'Welcome '.$user->fname.' '.$user->lname.' Thank you for joining';
                // Send a notification to Admin about the new patient

                // $this->autoAssign($user->toArray());
                $user->notify(new Welcome($payload));
            }else{
                $user->assignRole('counselor');
                $message = 'Welcome '.$user->fname.' '.$user->lname.' Thank you for joining';
                // Send a notification to Admin about the new counselor
                $user->notify(new NsansaWellnessCounselor($payload));
            }
        
            // Send a notification to Admin about the new user
            $admin->notify(new NewUserNotification($payload));
            // DB::commit();
            return $user;
        } catch (\Throwable $th) {
            dd($th);
            // DB::rollBack();
            return redirect()->back()->with('message', 'An email could not be sent you. please check again');
        }
    }
}
