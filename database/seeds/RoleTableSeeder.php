<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role_admin = new Role();
    $role_admin->name = 'Admin';
    $role_admin->description = 'A Admin User';
    $role_admin->save();

    $role_superadmin = new Role();
    $role_superadmin->name = 'SuperAdmin';
    $role_superadmin->description = ' aasdsa';
    $role_superadmin->save();

    $role_manager = new Role();
    $role_manager->name = 'User';
    $role_manager->description = 'asdasd';
    $role_manager->save();
    }
}
