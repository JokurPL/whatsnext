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
        for ($i = 0; $i<3; $i++) {
            $user = new \App\User();
            $user->name = 'User' . $i;
            $user->password = bcrypt('User');
            $user->email = 'user' . $i . '@user.com';
            $user->save();
        }
    }
}
