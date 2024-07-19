<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'appointment_id',
        'status',
        'chat_id'
    ];

    public function appointment(){
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'guest_id');
    }
}
