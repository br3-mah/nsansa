<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'group_assigned',
        'status_id'
    ];


    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
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
