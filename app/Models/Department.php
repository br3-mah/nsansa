<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'initials',
        'liecense',
        'desc'
    ];

    public function users(){
        return $this->hasManyThrough(User::class, MyDepartment::class);
    }
}
