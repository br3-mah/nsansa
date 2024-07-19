<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'father_name',
        'mother_name',
        'type',
        'role',
        'status',
        'liecense_number',
        'country',
        'mobile_no',
        'state',
        'email',
        'username',
        'gender',
        'guest_id',
        'first_login',
        'department',
        'nrc_id',
        'password',
        'blood_group',
        'date_of_birth',
        'place_of_birth',
        'address',
        'occupation',
        'hourly_charge',
        'image_path',
        'id_image_path',
        'cover_image_path',
        'patient_condition',
        'login_count'
    ];

    protected $appends = [
        'has_paid'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Always encrypt password when it is updated.
     *
     * @param $value
     * @return string
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = $value;
    }

    
    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function getHasPaidAttribute(){
        // dd(Billing::has_no_bill());
        return Billing::has_no_bill();
    }

    public function getNewClientAttribute(){
        return $this->new_paid();
    }

    // Return true or false if paid, if its user's first assignment to counselor
    public function new_paid(){
        $x = $this->hasMany(Billing::class)
                    ->where('status', 1)->get();
                    // ->where('counselor_id', 1)->get();
        return $x->count() > 0 && $x->count() < 2  ?  true :  false; 
    }

    public static function has_appointment(){
        $asGuest = UserAppointment::where('guest_id', auth()->user()->id)->exists();
        $asHost = Appointment::where('user_id', auth()->user()->id)->exists();
        if($asHost){
            return true;
        }
        if($asGuest){
            return true;
        }
        return false;
    }

    public static function isPoneEmpty(){
        $data = auth()->user()->mobile_no;
        if($data == null || $data == ''){
            return true;
        }else{
            return false;
        }
    }

    public static function hasNotUploaded(){
        try {
            $mf = MyFile::where('user_id', auth()->user()->id)->latest()->first()->toArray();
            // dd(empty($mf['nrc_file']));
            if(
                empty($mf['nrc_file']) ||
                empty($mf['cv_file']) ||
                empty($mf['cert_file'])  
            ){
                return true;
            }else{
                return false;
            }
        } catch (\Throwable $th) {
            return true;
        }
    }

    // Return true or false if paid, if its user's return session to counselor
    public function old_paid(){
        $x = $this->hasMany(Billing::class)
                    ->where('status', 1)->get();
                    // ->where('counselor_id', 1)->get();
        return $x->count() > 1 ?  true :  false; 
    }
    
    public function new_client(){
        $x = $this->hasMany(Billing::class)->get();
                    // ->where('counselor_id', 1)->get();
        return $x->count() > 0 && $x->count() < 2  ?  true :  false; 
    }

    public static function fullNames($id){
        $u = User::where('id', $id)->first();
        if($u !== null){
            return $u->fname.' '.$u->lname;
        }
    }
    public function site_rating(){
        return $this->hasMany(SiteRating::class);
    }
    public function userAppointments(){
        $this->hasMany(UserAppointment::class);
    }

    public function appointments(){
        $this->hasMany(Appointment::class);
    }

    public function patient_activities(){
        return $this->hasMany(PatientActivity::class);
    }

    public function patient_files(){
        return $this->hasMany(PatientFile::class);
    }

    public function assignedCounselor(){
        return $this->hasOne(AssignCounselor::class, 'patient_id');
    }

    public function billing(){
        return $this->hasMany(Billing::class);
    }

    public function commissions(){
        return $this->hasMany(Commission::class);
    }

    public function departments(){
        return $this->hasMany(MyDepartment::class);
    }

    // Patient has many payments
    public function payments(){
        return $this->hasMany(Payment::class);
    }


    public function patient_questionaires(){
        return $this->hasMany(PatientQuestionnaires::class);
    }
    
    public function push_alerts(){
        return $this->hasMany(PushAlert::class);
    }

    public function unseen_push_alerts(){
        return $this->hasMany(PushAlert::class)->where('is_seen', 1);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function myfiles(){
        return $this->hasMany(MyFile::class);
    }

    public function availability(){
        return $this->hasMany(Availability::class);
    }
}