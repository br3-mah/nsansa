<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_path',
        'user_id',
        'patient_id',
        'appointment_id',
        'chat_id',
        'note_id',
        'description'
    ];

    public function counselor(){
        $this->belongsTo(User::class, 'user_id');
    }
    // $video->file_name = $request->file('video')->getClientOriginalName();
    //     $video->file_path = $path;
    //     $video->user_id = auth()->id();
}
