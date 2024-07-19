<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'desc',
        'type',
        'user_id',
        'counselor_id',
        'session_id',
        'link',
        'status_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function counselor(){
        return $this->belongsTo(User::class, 'counselor_id');
    }

    public function patient_activities(){
        return $this->hasMany(PatientActivity::class);
    }

    public static function assignedPatients($id){
        $data = PatientActivity::where('activity_id', $id)->with('users')->get();
        return $data;
    }

}
