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
                'cod_compra' => 'COMP001',
                'fecha_compra' => '2024-08-15',
                'monto_total' => 150.75,
                'user_id' => 1,
                'employee_id' => 1,
            ],
            [
                'cod_compra' => 'COMP002',
                'fecha_compra' => '2024-08-16',
                'monto_total' => 300.50,
                'user_id' => 2,
                'employee_id' => 2,
            ],
            [
                'cod_compra' => 'COMP003',
                'fecha_compra' => '2024-08-17',
                'monto_total' => 99.99,
                'user_id' => 3,
                'employee_id' => 3,
            ],
            [
                'cod_compra' => 'COMP004',
                'fecha_compra' => '2024-08-18',
                'monto_total' => 450.00,
                'user_id' => 4,
                'employee_id' => 4,
            ],
            [
                'cod_compra' => 'COMP005',
                'fecha_compra' => '2024-08-19',
                'monto_total' => 275.30,
                'user_id' => 5,
                'employee_id' => 5,
            ],
            [
                'cod_compra' => 'COMP006',
                'fecha_compra' => '2024-08-20',
                'monto_total' => 120.45,
                'user_id' => 6,
                'employee_id' => 6,
            ],
            [
                'cod_compra' => 'COMP007',
                'fecha_compra' => '2024-08-21',
                'monto_total' => 320.80,
                'user_id' => 7,
                'employee_id' => 7,
            ],
            [
                'cod_compra' => 'COMP008',
                'fecha_compra' => '2024-08-22',
                'monto_total' => 225.60,
                'user_id' => 8,
                'employee_id' => 8,
            ],
            [
                'cod_compra' => 'COMP009',
                'fecha_compra' => '2024-08-23',
                'monto_total' => 190.90,
                'user_id' => 9,
                'employee_id' => 9,
            ],
            [
                'cod_compra' => 'COMP010',
                'fecha_compra' => '2024-08-24',
                'monto_total' => 540.00,
                'user_id' => 10,
                'employee_id' => 10,
            ],
        ];

        foreach ($purchases as $purchase) {
            Purchase::create([
                'cod_compra' => $purchase['cod_compra'],
                'fecha_compra' => $purchase['fecha_compra'],
                'monto_total' => $purchase['monto_total'],
                'user_id' => $purchase['user_id'],
                'employee_id' => $purchase['employee_id'],
            ]);
        }
    }
}
