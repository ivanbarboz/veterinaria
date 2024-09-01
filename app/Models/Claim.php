<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    protected $table = 'claim';

    protected $fillable = [
        'descripcion',
        'fecha_respuesta',
        'modo_respuesta',
        'cod_compra',
        'user_id',
        'product_id',
        'employee_id',
        'documento'
    ];
}
