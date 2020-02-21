<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role_admin = Role::where('name', 'Admin')->first();
    $role_superadmin  = Role::where('name', 'SuperAdmin')->first();
    $role_manager  = Role::where('name', 'User')->first();

    $role_admin = new User();
    $role_admin->name = 'admin Name';
    $role_admin->email = 'admin@example.com';
    $role_admin->password = bcrypt('admin123');
    $role_admin->save();
    $role_admin->roles()->attach($role_admin);
    
    $role_superadmin = new User();
    $role_superadmin->name = 'superadmin Name';
    $role_superadmin->email = 'super@example.com';
    $role_superadmin->password = bcrypt('super123');
    $role_superadmin->save();
    $role_superadmin->roles()->attach($role_superadmin);

    $role_manager = new User();
    $role_manager->name = 'user Name';
    $role_manager->email = 'user@example.com';
    $role_manager->password = bcrypt('user123');
    $role_manager->save();
    $role_manager->roles()->attach($role_manager);

  }
}