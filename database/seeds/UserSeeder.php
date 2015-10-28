<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [
            ['username' => 'shane', 'email' => 'shane@gmail.com', 'password' => 'password'],
            ['username' => 'alex', 'email' => 'alex@gmail.com', 'password' => 'password'],
            ['username' => 'javon', 'email' => 'javon@gmail.com', 'password' => 'password']
        ];

        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}
