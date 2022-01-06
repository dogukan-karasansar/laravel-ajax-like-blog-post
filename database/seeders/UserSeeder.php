<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123456');
        \App\Models\User::insert([
            'name'=>'Emre Alşan',
            'email'=>'admin@admin.com',
            'email_verified_at' => now(),
            'type'=>'admin',
            'password' => $password, // 123456
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory(10)->create();
    }
}
