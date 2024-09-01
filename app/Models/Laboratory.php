<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;

    protected $table = 'laboratory';

    protected $fillable = [
        'nombre',
        'ubicacion'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_laboratory', 'laboratory_id', 'product_id');
    }
}
