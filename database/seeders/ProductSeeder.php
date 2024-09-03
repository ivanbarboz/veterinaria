<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            [
                "name" => "Bravecto Chew",
                "description" => "Tabletas masticables para el control de pulgas y garrapatas en perros. Contiene Fluralaner.",
                "expiration_date" => "2025-08-01"
            ],
            [
                "name" => "Milbemax",
                "description" => "Tabletas para la desparasitación interna de gatos. Contiene Milbemicina oxima y Praziquantel.",
                "expiration_date" => "2024-12-15"
            ],
            [
                "name" => "Cosequin DS",
                "description" => "Suplemento articular en tabletas para perros. Contiene Glucosamina y Condroitina.",
                "expiration_date" => "2025-03-10"
            ],
            [
                "name" => "Canine Plus Senior",
                "description" => "Tabletas multivitamínicas para perros mayores. Contiene un complejo de vitaminas y minerales.",
                "expiration_date" => "2026-01-20"
            ],
            [
                "name" => "Clavaseptin",
                "description" => "Antibiótico para infecciones bacterianas en perros y gatos. Contiene Amoxicilina y Ácido clavulánico.",
                "expiration_date" => "2025-09-30"
            ],
            [
                "name" => "Rimadyl",
                "description" => "Antiinflamatorio no esteroideo (AINE) en tabletas para perros. Contiene Carprofeno.",
                "expiration_date" => "2025-06-25"
            ],
            [
                "name" => "Zylkene",
                "description" => "Tabletas para reducir la ansiedad en perros y gatos. Contiene Alfa-casozepina.",
                "expiration_date" => "2024-11-05"
            ],
            [
                "name" => "Protexin Pro-Fibre",
                "description" => "Suplemento digestivo en tabletas para perros y gatos. Contiene Prebióticos y Probioticos.",
                "expiration_date" => "2025-07-18"
            ],
            [
                "name" => "Apoquel",
                "description" => "Tabletas para el tratamiento de alergias en perros. Contiene Oclacitinib.",
                "expiration_date" => "2025-04-22"
            ],
            [
                "name" => "Calmex",
                "description" => "Tabletas calmantes para reducir el estrés en perros y gatos durante viajes. Contiene L-Teanina y extracto de Valeriana.",
                "expiration_date" => "2025-10-30"
            ]
        ];

        foreach ($productos as $producto) {
            Product::create($producto);
        }
    }
}
