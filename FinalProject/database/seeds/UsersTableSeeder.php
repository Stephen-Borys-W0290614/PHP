<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $users = new Users();

        $users->name = 'Theme Guy';

        $users->email = 'theme@example.com';

        $users->password = bcrypt('password');

        $users->save();


        $users = new Users();

        $users->name = 'Regular Guy';

        $users->email = 'norm@example.com';

        $users->password = bcrypt('password');

        $users->save();
    }
}
