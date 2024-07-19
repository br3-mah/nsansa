<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class StaffAdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'fname' => 'Mwaba', 
            'lname' => 'Bota', 
            'email' => 'mwaba_bota@yahoo.co.uk',
            'type' => 'admin',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('mwaba.@2023')
        ]);
        
        $user2 = User::create([
            'fname' => 'Mwansa', 
            'lname' => 'Mulubwa', 
            'email' => 'info@nsansawellness.com',
            'type' => 'admin',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('mwansa.@2023')
        ]);
     
        $user->assignRole([1]);
        $user2->assignRole([1]);
    }
}
