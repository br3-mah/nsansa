<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'fname' => 'Developer', 
            'lname' => 'Mode', 
            'email' => 'nyeleti.bremah@gmail.com',
            'type' => 'admin',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('Database4life')
        ]);
     
        $user->assignRole('admin');
    }
}
