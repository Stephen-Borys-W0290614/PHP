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
    $role_employee = Role::where('title', 'employee')->first();
    $role_manager  = Role::where('title', 'manager')->first();
    $role_theme  = Role::where('title', 'theme manager')->first();


    $employee = new User();
    $employee->name = 'Base Employee';
    $employee->email = 'employee@example.com';
    $employee->password = bcrypt('password');
    $employee->save();
    $employee->roles()->attach($role_employee);


    $manager = new User();
    $manager->name = 'Big Boss';
    $manager->email = 'BigBoss@example.com';
    $manager->password = bcrypt('password');
    $manager->save();
    $manager->roles()->attach($role_manager);


    $theme = new User();
    $theme->name = 'Theme Manager';
    $theme->email = 'theme@example.com';
    $theme->password = bcrypt('password');
    $theme->save();
    $theme->roles()->attach($role_theme);
  }
}
