<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nombres' => 'Juan',
                'apellidos' => 'Pérez',
                'correo' => 'juan.perez@example.com',
                'estado' => 'A',
                'telefono' => '123456789',
                'contraseña' => Hash::make('password123'),
            ],
            [
                'nombres' => 'Ana',
                'apellidos' => 'López',
                'correo' => 'ana.lopez@example.com',
                'estado' => 'A',
                'telefono' => '987654321',
                'contraseña' => Hash::make('password456'),
            ],
            [
                'nombres' => 'Carlos',
                'apellidos' => 'Méndez',
                'correo' => 'carlos.mendez@example.com',
                'estado' => 'I',
                'telefono' => '456123789',
                'contraseña' => Hash::make('password789'),
            ],
            [
                'nombres' => 'Lucía',
                'apellidos' => 'Ramírez',
                'correo' => 'lucia.ramirez@example.com',
                'estado' => 'A',
                'telefono' => '321654987',
                'contraseña' => Hash::make('password012'),
            ],
            [
                'nombres' => 'Miguel',
                'apellidos' => 'González',
                'correo' => 'miguel.gonzalez@example.com',
                'estado' => 'I',
                'telefono' => '852963741',
                'contraseña' => Hash::make('password345'),
            ],
            [
                'nombres' => 'Sofía',
                'apellidos' => 'Martínez',
                'correo' => 'sofia.martinez@example.com',
                'estado' => 'A',
                'telefono' => '741852963',
                'contraseña' => Hash::make('password678'),
            ],
            [
                'nombres' => 'Diego',
                'apellidos' => 'Torres',
                'correo' => 'diego.torres@example.com',
                'estado' => 'I',
                'telefono' => '963852741',
                'contraseña' => Hash::make('password901'),
            ],
            [
                'nombres' => 'Valeria',
                'apellidos' => 'Vargas',
                'correo' => 'valeria.vargas@example.com',
                'estado' => 'A',
                'telefono' => '369258147',
                'contraseña' => Hash::make('password234'),
            ],
            [
                'nombres' => 'Andrés',
                'apellidos' => 'Navarro',
                'correo' => 'andres.navarro@example.com',
                'estado' => 'A',
                'telefono' => '147258369',
                'contraseña' => Hash::make('password567'),
            ],
            [
                'nombres' => 'Mariana',
                'apellidos' => 'Soto',
                'correo' => 'mariana.soto@example.com',
                'estado' => 'I',
                'telefono' => '258369147',
                'contraseña' => Hash::make('password890'),
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'nombres' => $user['nombres'],
                'apellidos' => $user['apellidos'],
                'correo' => $user['correo'],
                'estado' => $user['estado'],
                'telefono' => $user['telefono'],
                'contraseña' => $user['contraseña'],
            ]);
        }
    }
}
