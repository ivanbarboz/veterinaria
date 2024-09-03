<?php

namespace Database\Seeders;

use App\Models\Purchase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $purchases = [
            [
                'purchase_code' => 'COMP001',
                'purchase_date' => '2024-08-15',
                'total_price' => 150.75,
                'user_id' => 1,
                'employee_id' => 1,
            ],
            [
                'purchase_code' => 'COMP002',
                'purchase_date' => '2024-08-16',
                'total_price' => 300.50,
                'user_id' => 2,
                'employee_id' => 2,
            ],
            [
                'purchase_code' => 'COMP003',
                'purchase_date' => '2024-08-17',
                'total_price' => 99.99,
                'user_id' => 3,
                'employee_id' => 3,
            ],
            [
                'purchase_code' => 'COMP004',
                'purchase_date' => '2024-08-18',
                'total_price' => 450.00,
                'user_id' => 4,
                'employee_id' => 4,
            ],
            [
                'purchase_code' => 'COMP005',
                'purchase_date' => '2024-08-19',
                'total_price' => 275.30,
                'user_id' => 5,
                'employee_id' => 5,
            ],
            [
                'purchase_code' => 'COMP006',
                'purchase_date' => '2024-08-20',
                'total_price' => 120.45,
                'user_id' => 6,
                'employee_id' => 6,
            ],
            [
                'purchase_code' => 'COMP007',
                'purchase_date' => '2024-08-21',
                'total_price' => 320.80,
                'user_id' => 7,
                'employee_id' => 7,
            ],
            [
                'purchase_code' => 'COMP008',
                'purchase_date' => '2024-08-22',
                'total_price' => 225.60,
                'user_id' => 8,
                'employee_id' => 8,
            ],
            [
                'purchase_code' => 'COMP009',
                'purchase_date' => '2024-08-23',
                'total_price' => 190.90,
                'user_id' => 9,
                'employee_id' => 9,
            ],
            [
                'purchase_code' => 'COMP010',
                'purchase_date' => '2024-08-24',
                'total_price' => 540.00,
                'user_id' => 10,
                'employee_id' => 10,
            ],
        ];

        foreach ($purchases as $purchase) {
            Purchase::create([
                'purchase_code' => $purchase['purchase_code'],
                'purchase_date' => $purchase['purchase_date'],
                'total_price' => $purchase['total_price'],
                'user_id' => $purchase['user_id'],
                'employee_id' => $purchase['employee_id'],
            ]);
        }
    }
}
