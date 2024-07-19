<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientQQuestions extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'type',
        'questionaire_id'
    ];

    public function questionaire(){
        return $this->belongsTo(PatientQuestionnaires::class);
    }

    public function answers(){
        return $this->hasMany(PatientQAnswers::class,'question_id');
    }

    public function results(){
        return $this->hasMany(PatientQResult::class, 'question_id');
    }
}
