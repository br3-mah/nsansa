<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignCounselor extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'counselor_id',
        'status_id', // 1 / 2
        'comments',
        'status', // paid / unpaid
        'rate', // amount
        'end_date'
    ];

    public static function has_new_assignment(){
        try {
            $chat = Chat::where('sender_id', auth()->user()->id)
            ->where('status', 3)->exists(); 
            return $chat;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public static function currrentAssignReq(){
    
        try {
            $chat = Chat::where('sender_id', auth()->user()->id)
            ->where('status', 3)->first(); 
            $assign = AssignCounselor::with('patient')
                        ->where('id', $chat->assign_id)->first(); 
                        
            return $assign;
        } catch (\Throwable $th) {
            return 0;
        }
    }
    public function counselor(){
        return $this->belongsTo(User::class, 'counselor_id');
    }

    public function patient(){
        return $this->belongsTo(User::class, 'patient_id');
    }

}
