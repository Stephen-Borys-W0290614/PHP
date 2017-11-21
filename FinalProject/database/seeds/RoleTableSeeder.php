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
    $role = new Role();
    $role->title = 'employee';
    $role->description = 'A Employee User';
    $role->save();


    $role = new Role();
    $role->title = 'manager';
    $role->description = 'A Manager User';
    $role->save();


    $role = new Role();
    $role->title = 'theme manager';
    $role->description = 'A Theme Manager';
    $role->save();
  }
}
