<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'fname' => 'Super', 
            'lname' => 'Administrator', 
            'email' => 'wezibotae@gmail.com',
            'type' => 'admin',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('wezi.@2023')
        ]);
    
        $role = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'counselor']);
        $role3 = Role::create(['name' => 'patient']);
     
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
