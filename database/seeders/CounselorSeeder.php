<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounselorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = User::create([
            'fname' => 'Mr', 
            'lname' => 'Demo', 
            'email' => 'fake@gmail.com',
            'type' => 'counselor',
            'department' => 'psychologist',
            'username' => 'counselor',
            'email_verified_at' => now(),
            'password' => bcrypt('test@123')
        ]);
     
        $c->assignRole('counselor');
    }
}
