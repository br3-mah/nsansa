<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nrc_file',
        'cv_file',
        'cert_file',
        'license_file',
        'prof_file',
        'status',
        'comments',
        'website'
    ];
 
    public function user(){
         return $this->belongsTo(User::class);
    }
}
