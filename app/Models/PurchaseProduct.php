<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseProduct extends Model
{
    use HasFactory;

    protected $table = 'purchase_product';

    protected $fillable = [
        'purchase_id',
        'product_id',
        'cantidad',
        'sub_total',
        'unit_id'
    ];
}
