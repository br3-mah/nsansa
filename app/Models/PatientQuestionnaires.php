<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientQuestionnaires extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'patients',
        'status'
    ];

    public static function isCompleted($user_id, $questionnaire_id){
        // get the total number of questions
        $tt_q = PatientQQuestions::where('questionaire_id', $questionnaire_id)->count();
        // get the total number of answers
        $tt_a = PatientQResult::where('questionnaire_id', $questionnaire_id)
                                ->where('user_id', $user_id)->count();
        // compare
        if ($tt_a == $tt_q) {
            return 0;
        }

        return $tt_q - $tt_a;
        // return
    }

    public function questions(){
        return $this->hasMany(PatientQQuestions::class, 'questionaire_id');
    }

    public function results(){
        return $this->hasMany(PatientQResult::class);
    }

    public function patient(){
        return $this->belongsTo(User::class);
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($questionaire) { // before delete() method call this
             $questionaire->questions()->each(function($question) {
                $question->delete(); // <-- direct deletion
             });
        });
    }
}
