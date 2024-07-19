<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'desc',
        'value',
        'currency',
        'status',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
