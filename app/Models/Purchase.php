<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchase';

    protected $fillable = [
        'cod_compra',
        'fecha_compra',
        'monto_total',
        'user_id',
        'employee_id'
    ];
}
