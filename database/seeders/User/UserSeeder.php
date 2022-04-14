<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@e-market.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => str()->random(10),
        ]);

        User::create([
            'name' => 'Customer',
            'email' => 'customer@e-market.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => str()->random(10),
        ]);

        User::factory(10)->create();
    }
}
