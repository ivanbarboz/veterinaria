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
                'firstname' => 'Juan',
                'lastname' => 'Pérez',
                'email' => 'juan.perez@example.com',
                'status' => 'A',
                'phone' => '123456789',
                'password' => Hash::make('password123'),
            ],
            [
                'firstname' => 'Ana',
                'lastname' => 'López',
                'email' => 'ana.lopez@example.com',
                'status' => 'A',
                'phone' => '987654321',
                'password' => Hash::make('password456'),
            ],
            [
                'firstname' => 'Carlos',
                'lastname' => 'Méndez',
                'email' => 'carlos.mendez@example.com',
                'status' => 'I',
                'phone' => '456123789',
                'password' => Hash::make('password789'),
            ],
            [
                'firstname' => 'Lucía',
                'lastname' => 'Ramírez',
                'email' => 'lucia.ramirez@example.com',
                'status' => 'A',
                'phone' => '321654987',
                'password' => Hash::make('password012'),
            ],
            [
                'firstname' => 'Miguel',
                'lastname' => 'González',
                'email' => 'miguel.gonzalez@example.com',
                'status' => 'I',
                'phone' => '852963741',
                'password' => Hash::make('password345'),
            ],
            [
                'firstname' => 'Sofía',
                'lastname' => 'Martínez',
                'email' => 'sofia.martinez@example.com',
                'status' => 'A',
                'phone' => '741852963',
                'password' => Hash::make('password678'),
            ],
            [
                'firstname' => 'Diego',
                'lastname' => 'Torres',
                'email' => 'diego.torres@example.com',
                'status' => 'I',
                'phone' => '963852741',
                'password' => Hash::make('password901'),
            ],
            [
                'firstname' => 'Valeria',
                'lastname' => 'Vargas',
                'email' => 'valeria.vargas@example.com',
                'status' => 'A',
                'phone' => '369258147',
                'password' => Hash::make('password234'),
            ],
            [
                'firstname' => 'Andrés',
                'lastname' => 'Navarro',
                'email' => 'andres.navarro@example.com',
                'status' => 'A',
                'phone' => '147258369',
                'password' => Hash::make('password567'),
            ],
            [
                'firstname' => 'Mariana',
                'lastname' => 'Soto',
                'email' => 'mariana.soto@example.com',
                'status' => 'I',
                'phone' => '258369147',
                'password' => Hash::make('password890'),
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'firstname' => $user['firstname'],
                'lastname' => $user['lastname'],
                'email' => $user['email'],
                'status' => $user['status'],
                'phone' => $user['phone'],
                'password' => $user['password'],
            ]);
        }
    }
}
