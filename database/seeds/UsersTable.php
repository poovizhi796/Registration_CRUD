<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'password' => Hash::make('password'),
            // 'password' => '123',
            'remember_token' => str_random(10),

        ]);
    }
}
