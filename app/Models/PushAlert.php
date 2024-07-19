<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PushAlert extends Model
{
    use HasFactory;    
    protected $fillable = [
        'message',
        'for_user_id',
        'from_user_id',
        'is_seen',
        'status'
    ];

    public function for(){
        return $this->belongsTo(User::class, 'for_user_id');
    }

    public function from(){
        return $this->belongsTo(User::class, 'from_user_id');
    }
}
