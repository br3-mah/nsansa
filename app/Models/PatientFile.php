<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'condition',
        'treatment',
        'symptom',
        'name',
        'comments',
        'bp_level',
        'infection',
        'status_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    // Returns a patient's counselor
    public static function counselorAssigned($patient_id){
        return AssignCounselor::where('patient_id', $patient_id)->with('counselor')
                ->get()->first();
    }
}
