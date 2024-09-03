<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'birthdate',
        'location'
    ];

    public function documentTypes()
    {
        return $this->belongsToMany(DocumentType::class)
            ->using(EmployeeDocument::class)
            ->withPivot('nro_documento');
    }
}
