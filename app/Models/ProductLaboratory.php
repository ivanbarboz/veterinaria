<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLaboratory extends Model
{
    use HasFactory;

    protected $table = 'product_laboratory';

    protected $fillable = [
        'product_id',
        'laboratory_id'
    ];
}
