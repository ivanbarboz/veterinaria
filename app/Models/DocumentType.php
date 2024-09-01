<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    use HasFactory;

    protected $table = 'document_type';

    protected $fillable = [
        'nombre',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_document', 'document_type_id', 'user_id')
            ->using(UserDocument::class)
            ->withPivot('nro_documento');
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_document', 'document_type_id', 'employee_id')
            ->using(EmployeeDocument::class)
            ->withPivot('nro_documento');
    }
}
