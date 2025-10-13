<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'code' => '1101',
            'name' => 'Kas Kecil',
            'type' => 'income',
            'opening_balance' => '10000000'
        ]);
    }
}
