<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'fname' => 'Patient', 
            'lname' => 'Tester', 
            'email' => 'roadoc404@gmail.com',
            'type' => 'patient',
            'username' => 'patient',
            'email_verified_at' => now(),
            'password' => bcrypt('test@123')
        ]);
        $user2 = User::create([
            'fname' => 'Counselor', 
            'lname' => 'Tester', 
            'email' => 'tristan.nyeleti@gmail.com',
            'type' => 'counselor',
            'username' => 'counselor',
            'email_verified_at' => now(),
            'password' => bcrypt('test@123')
        ]);
     
        $user->assignRole('patient');
        $user2->assignRole('counselor');
    }
}
