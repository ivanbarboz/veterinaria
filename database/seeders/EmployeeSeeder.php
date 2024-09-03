<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'firstname' => 'Laura',
                'lastname' => 'García',
                'phone' => '987654321',
                'email' => 'laura.garcia@example.com',
                'birthdate' => '1990-05-21',
                'location' => 'Av. Arequipa 1234, Miraflores, Lima',
            ],
            [
                'firstname' => 'Roberto',
                'lastname' => 'Fernández',
                'phone' => '912345678',
                'email' => 'roberto.fernandez@example.com',
                'birthdate' => '1985-11-02',
                'location' => 'Calle Los Olivos 567, San Isidro, Lima',
            ],
            [
                'firstname' => 'María',
                'lastname' => 'López',
                'phone' => '998765432',
                'email' => 'maria.lopez@example.com',
                'birthdate' => '1992-03-14',
                'location' => 'Jr. Puno 234, Cercado de Lima, Lima',
            ],
            [
                'firstname' => 'Luis',
                'lastname' => 'Ramírez',
                'phone' => '987123456',
                'email' => 'luis.ramirez@example.com',
                'birthdate' => '1988-07-25',
                'location' => 'Av. Javier Prado Este 456, San Borja, Lima',
            ],
            [
                'firstname' => 'Patricia',
                'lastname' => 'Mendoza',
                'phone' => '976543210',
                'email' => 'patricia.mendoza@example.com',
                'birthdate' => '1995-01-30',
                'location' => 'Calle Las Flores 789, Surco, Lima',
            ],
            [
                'firstname' => 'Carlos',
                'lastname' => 'Vargas',
                'phone' => '965432109',
                'email' => 'carlos.vargas@example.com',
                'birthdate' => '1983-12-10',
                'location' => 'Av. Universitaria 345, San Miguel, Lima',
            ],
            [
                'firstname' => 'Fernanda',
                'lastname' => 'Castillo',
                'phone' => '912098765',
                'email' => 'fernanda.castillo@example.com',
                'birthdate' => '1991-08-19',
                'location' => 'Jr. Independencia 890, Pueblo Libre, Lima',
            ],
            [
                'firstname' => 'Javier',
                'lastname' => 'Rojas',
                'phone' => '987654098',
                'email' => 'javier.rojas@example.com',
                'birthdate' => '1987-09-22',
                'location' => 'Av. Angamos Oeste 123, Miraflores, Lima',
            ],
            [
                'firstname' => 'Elena',
                'lastname' => 'Paredes',
                'phone' => '956789012',
                'email' => 'elena.paredes@example.com',
                'birthdate' => '1993-04-05',
                'location' => 'Calle Belén 345, Barranco, Lima',
            ],
            [
                'firstname' => 'Miguel',
                'lastname' => 'Soto',
                'phone' => '932165478',
                'email' => 'miguel.soto@example.com',
                'birthdate' => '1989-06-17',
                'location' => 'Av. Primavera 678, Surco, Lima',
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create([
                'firstname' => $employee['firstname'],
                'lastname' => $employee['lastname'],
                'phone' => $employee['phone'],
                'email' => $employee['email'],
                'birthdate' => $employee['birthdate'],
                'location' => $employee['location'],
            ]);
        }
    }
}
