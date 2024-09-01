<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_vencimiento'
    ];

    public function laboratories()
    {
        return $this->belongsToMany(Laboratory::class, 'product_laboratory', 'product_id', 'laboratory_id');
    }

    public function units()
    {
        return $this->belongsToMany(Unit::class, 'product_unit', 'product_id', 'unit_id')
            ->using(ProductUnit::class)
            ->withPivot([
                'stock_actual',
                'stock',
                'ultimo_abastecimiento'
            ]);
    }

    public function purchases()
    {
        return $this->belongsToMany(Purchase::class, 'purchase_product', 'product_id', 'purchase_id')
            ->using(PurchaseProduct::class)
            ->withPivot([
                'cantidad',
                'sub_total',
                'unit_id'
            ]);
    }
}
