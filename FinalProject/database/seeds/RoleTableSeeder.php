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
    $role->title = 'mod';
    $role->description = 'This Is A Standard User';
    $role->save();


    $role = new Role();
    $role->title = 'admin';
    $role->description = 'This User Is An Admin';
    $role->save();


    $role = new Role();
    $role->title = 'theme manager';
    $role->description = 'This User Is An  Theme Manager';
    $role->save();
  }
}
