<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AccountSeeder;
use Database\Seeders\SupplierSeeder;
use Database\Seeders\AccountsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            AccountsTableSeeder::class,
            SupplierSeeder::class,
            UserSeeder::class,
        ]);
    }
}
