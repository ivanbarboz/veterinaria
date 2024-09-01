<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDocument extends Model
{
    use HasFactory;

    protected $table = 'employee_document';

    protected $fillable = [
        'employee_id',
        'document_type_id',
        'nro_documento'
    ];
}
