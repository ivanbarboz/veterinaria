<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->using(UserDocument::class)
            ->withPivot('nro_documento');
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class)
            ->using(EmployeeDocument::class)
            ->withPivot('nro_documento');
    }
}
