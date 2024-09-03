<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Node\Block\Document;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DocumentTypeSeeder::class,
            EmployeeSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            UnitSeeder::class,
            PurchaseSeeder::class,
        ]);
    }
}
