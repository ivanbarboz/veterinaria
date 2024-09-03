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
                "nombre" => "Bravecto Chew",
                "descripcion" => "Tabletas masticables para el control de pulgas y garrapatas en perros. Contiene Fluralaner.",
                "fecha_vencimiento" => "2025-08-01"
            ],
            [
                "nombre" => "Milbemax",
                "descripcion" => "Tabletas para la desparasitación interna de gatos. Contiene Milbemicina oxima y Praziquantel.",
                "fecha_vencimiento" => "2024-12-15"
            ],
            [
                "nombre" => "Cosequin DS",
                "descripcion" => "Suplemento articular en tabletas para perros. Contiene Glucosamina y Condroitina.",
                "fecha_vencimiento" => "2025-03-10"
            ],
            [
                "nombre" => "Canine Plus Senior",
                "descripcion" => "Tabletas multivitamínicas para perros mayores. Contiene un complejo de vitaminas y minerales.",
                "fecha_vencimiento" => "2026-01-20"
            ],
            [
                "nombre" => "Clavaseptin",
                "descripcion" => "Antibiótico para infecciones bacterianas en perros y gatos. Contiene Amoxicilina y Ácido clavulánico.",
                "fecha_vencimiento" => "2025-09-30"
            ],
            [
                "nombre" => "Rimadyl",
                "descripcion" => "Antiinflamatorio no esteroideo (AINE) en tabletas para perros. Contiene Carprofeno.",
                "fecha_vencimiento" => "2025-06-25"
            ],
            [
                "nombre" => "Zylkene",
                "descripcion" => "Tabletas para reducir la ansiedad en perros y gatos. Contiene Alfa-casozepina.",
                "fecha_vencimiento" => "2024-11-05"
            ],
            [
                "nombre" => "Protexin Pro-Fibre",
                "descripcion" => "Suplemento digestivo en tabletas para perros y gatos. Contiene Prebióticos y Probioticos.",
                "fecha_vencimiento" => "2025-07-18"
            ],
            [
                "nombre" => "Apoquel",
                "descripcion" => "Tabletas para el tratamiento de alergias en perros. Contiene Oclacitinib.",
                "fecha_vencimiento" => "2025-04-22"
            ],
            [
                "nombre" => "Calmex",
                "descripcion" => "Tabletas calmantes para reducir el estrés en perros y gatos durante viajes. Contiene L-Teanina y extracto de Valeriana.",
                "fecha_vencimiento" => "2025-10-30"
            ]
        ];
        
        foreach ($productos as $producto) {
            Product::create($producto);
        }
    }
}
