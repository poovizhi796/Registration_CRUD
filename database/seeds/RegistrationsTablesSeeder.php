<?php

use Illuminate\Database\Seeder;
use  App\Registration;
use Illuminate\Support\Str;

class RegistrationsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registration::create([
            'name' => Str::random(10),
            'mobile' => Str::random(10),
            'address' => Str::random(50),
            'gender' => Str::random(10),
            'subject' => Str::random(10),
            'district' => Str::random(10),
        ]);
    }
}
