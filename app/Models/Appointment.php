<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'setter',   
        'start_date',
        'end_date',
        'video_link',
        'call_link',
        'type',
        'status',
        'comments',
        'user_id',
        'start_time',
        'end_time'
    ];

    public static function appointmentCounselor($id){
        $app = Appointment::where('id', $id)->first();
        $user = User::where('id', $app->user_id)->first();
        if ($user) {
            if ($user->hasRole('counselor')) {
                return $user;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    // Returns an array
    public static function appointmentPatients($id){
        $app = Appointment::where('id', $id)->first();
        $user = User::where('id', $app->user_id)->first();
        if ($user) {
            if ($user->hasRole('patient')) {
                return $user;
            } else {
                $return = [];
                $uapp = UserAppointment::where('appointment_id', $id)->get();
                foreach ($uapp as $key => $u) {
                    // Assuming $u->guest_id contains the user ID you want to retrieve
                    $user = User::where('id', $u->guest_id)->first();
                    // Push the $user object into the $return array
                    $return[] = $u;
                }
                // dd($return);
                return $return;
            }
        } else {
            return null;
        }
    }

    public function userAppointment(){
        return $this->hasMany(UserAppointment::class);
    }

    public function guests(){
        return $this->hasMany(UserAppointment::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
