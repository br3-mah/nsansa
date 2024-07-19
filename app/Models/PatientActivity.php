<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'activity_id',
        'counselor_id',
        'user_id',
        'comments',
        'diagnosis',
        'status_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function activities(){
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
