<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'duration',
        'per',
        'user_id'
    ];

    public static function planInfo($id){
        $p = Plan::where('id', $id)->first();

        if($p !== null){
            return $p;
        }else{
            return 0;
        }
        
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function feature(){
        return $this->hasMany(PlanItem::class);
    }

}
