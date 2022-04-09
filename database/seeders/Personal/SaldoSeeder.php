<?php

namespace Database\Seeders\Personal;

use App\Models\Personal\Saldo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaldoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Saldo::create([
            'balance' => 100.00,
            'user_id' => 1,
        ]);

        Saldo::create([
            'balance' => 100.00,
            'user_id' => 2,
        ]);
    }
}
