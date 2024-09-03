<?php

namespace Database\Seeders;

use App\Models\PurchaseProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $purchaseProducts = [
            [
                'purchase_id' => 1,
                'product_id' => 1,
                'amount' => 2,
                'sub_total' => 50.00,
                'unit_id' => 1,
            ],
            [
                'purchase_id' => 1,
                'product_id' => 2,
                'amount' => 3,
                'sub_total' => 100.00,
                'unit_id' => 2,
            ],
            [
                'purchase_id' => 2,
                'product_id' => 3,
                'amount' => 1,
                'sub_total' => 150.50,
                'unit_id' => 3,
            ],
            [
                'purchase_id' => 2,
                'product_id' => 1,
                'amount' => 4,
                'sub_total' => 200.00,
                'unit_id' => 1,
            ],
            [
                'purchase_id' => 3,
                'product_id' => 2,
                'amount' => 5,
                'sub_total' => 99.99,
                'unit_id' => 2,
            ],
            [
                'purchase_id' => 3,
                'product_id' => 3,
                'amount' => 2,
                'sub_total' => 200.00,
                'unit_id' => 3,
            ],
            [
                'purchase_id' => 4,
                'product_id' => 1,
                'amount' => 3,
                'sub_total' => 75.00,
                'unit_id' => 1,
            ],
            [
                'purchase_id' => 4,
                'product_id' => 3,
                'amount' => 1,
                'sub_total' => 375.00,
                'unit_id' => 3,
            ],
            [
                'purchase_id' => 5,
                'product_id' => 2,
                'amount' => 10,
                'sub_total' => 100.00,
                'unit_id' => 2,
            ],
            [
                'purchase_id' => 6,
                'product_id' => 1,
                'amount' => 1,
                'sub_total' => 60.00,
                'unit_id' => 1,
            ],
            [
                'purchase_id' => 7,
                'product_id' => 1,
                'amount' => 5,
                'sub_total' => 125.00,
                'unit_id' => 1,
            ],
            [
                'purchase_id' => 7,
                'product_id' => 2,
                'amount' => 4,
                'sub_total' => 80.00,
                'unit_id' => 2,
            ],
            [
                'purchase_id' => 8,
                'product_id' => 3,
                'amount' => 3,
                'sub_total' => 225.00,
                'unit_id' => 3,
            ],
            [
                'purchase_id' => 8,
                'product_id' => 2,
                'amount' => 6,
                'sub_total' => 120.00,
                'unit_id' => 2,
            ],
            [
                'purchase_id' => 9,
                'product_id' => 1,
                'amount' => 2,
                'sub_total' => 100.00,
                'unit_id' => 1,
            ],
            [
                'purchase_id' => 9,
                'product_id' => 3,
                'amount' => 5,
                'sub_total' => 375.00,
                'unit_id' => 3,
            ],
            [
                'purchase_id' => 10,
                'product_id' => 2,
                'amount' => 8,
                'sub_total' => 160.00,
                'unit_id' => 2,
            ],
            [
                'purchase_id' => 10,
                'product_id' => 1,
                'amount' => 1,
                'sub_total' => 30.00,
                'unit_id' => 1,
            ],
        ];

        foreach ($purchaseProducts as $purchaseProduct) {
            PurchaseProduct::create([
                'purchase_id' => $purchaseProduct['purchase_id'],
                'product_id' => $purchaseProduct['product_id'],
                'amount' => $purchaseProduct['amount'],
                'sub_total' => $purchaseProduct['sub_total'],
                'unit_id' => $purchaseProduct['unit_id'],
            ]);
        }
    }
}
