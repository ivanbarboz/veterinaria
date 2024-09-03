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
                'nombres' => 'Laura',
                'apellidos' => 'García',
                'telefono' => '987654321',
                'correo' => 'laura.garcia@example.com',
                'fecha_nacimiento' => '1990-05-21',
                'ubicacion' => 'Av. Arequipa 1234, Miraflores, Lima',
            ],
            [
                'nombres' => 'Roberto',
                'apellidos' => 'Fernández',
                'telefono' => '912345678',
                'correo' => 'roberto.fernandez@example.com',
                'fecha_nacimiento' => '1985-11-02',
                'ubicacion' => 'Calle Los Olivos 567, San Isidro, Lima',
            ],
            [
                'nombres' => 'María',
                'apellidos' => 'López',
                'telefono' => '998765432',
                'correo' => 'maria.lopez@example.com',
                'fecha_nacimiento' => '1992-03-14',
                'ubicacion' => 'Jr. Puno 234, Cercado de Lima, Lima',
            ],
            [
                'nombres' => 'Luis',
                'apellidos' => 'Ramírez',
                'telefono' => '987123456',
                'correo' => 'luis.ramirez@example.com',
                'fecha_nacimiento' => '1988-07-25',
                'ubicacion' => 'Av. Javier Prado Este 456, San Borja, Lima',
            ],
            [
                'nombres' => 'Patricia',
                'apellidos' => 'Mendoza',
                'telefono' => '976543210',
                'correo' => 'patricia.mendoza@example.com',
                'fecha_nacimiento' => '1995-01-30',
                'ubicacion' => 'Calle Las Flores 789, Surco, Lima',
            ],
            [
                'nombres' => 'Carlos',
                'apellidos' => 'Vargas',
                'telefono' => '965432109',
                'correo' => 'carlos.vargas@example.com',
                'fecha_nacimiento' => '1983-12-10',
                'ubicacion' => 'Av. Universitaria 345, San Miguel, Lima',
            ],
            [
                'nombres' => 'Fernanda',
                'apellidos' => 'Castillo',
                'telefono' => '912098765',
                'correo' => 'fernanda.castillo@example.com',
                'fecha_nacimiento' => '1991-08-19',
                'ubicacion' => 'Jr. Independencia 890, Pueblo Libre, Lima',
            ],
            [
                'nombres' => 'Javier',
                'apellidos' => 'Rojas',
                'telefono' => '987654098',
                'correo' => 'javier.rojas@example.com',
                'fecha_nacimiento' => '1987-09-22',
                'ubicacion' => 'Av. Angamos Oeste 123, Miraflores, Lima',
            ],
            [
                'nombres' => 'Elena',
                'apellidos' => 'Paredes',
                'telefono' => '956789012',
                'correo' => 'elena.paredes@example.com',
                'fecha_nacimiento' => '1993-04-05',
                'ubicacion' => 'Calle Belén 345, Barranco, Lima',
            ],
            [
                'nombres' => 'Miguel',
                'apellidos' => 'Soto',
                'telefono' => '932165478',
                'correo' => 'miguel.soto@example.com',
                'fecha_nacimiento' => '1989-06-17',
                'ubicacion' => 'Av. Primavera 678, Surco, Lima',
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create([
                'nombres' => $employee['nombres'],
                'apellidos' => $employee['apellidos'],
                'telefono' => $employee['telefono'],
                'correo' => $employee['correo'],
                'fecha_nacimiento' => $employee['fecha_nacimiento'],
                'ubicacion' => $employee['ubicacion'],
            ]);
        }
    }
}
