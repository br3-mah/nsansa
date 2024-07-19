<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'user_id',
        'chat_id',
        'status',
        'status_received',
        'viewable',
        'file',
        'appointment_id',
        'activity_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function reply(){
        return $this->belongsTo(ChatMessages::class, 'reply_id');
    }
    public function chat(){
        return $this->belongsTo(Chat::class, 'chat_id');
    }
    public function appointment(){
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
    public function activity(){
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
