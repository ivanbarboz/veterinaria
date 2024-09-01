<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';

    protected $fillable = [
        'nombres',
        'apellidos',
        'telefono',
        'correo',
        'fecha_nacimiento',
        'ubicacion'
    ];

    public function documentTypes()
    {
        return $this->belongsToMany(DocumentType::class, 'employee_document', 'employee_id', 'document_type_id')
            ->using(EmployeeDocument::class)
            ->withPivot('nro_documento');
    }
}
