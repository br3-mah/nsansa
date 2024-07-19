<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentCommission extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_id',
        'comm_setting_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function commission_setting(){
        return $this->belongsTo(CommissionSetting::class, 'comm_setting_id');
    }
}
