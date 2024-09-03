<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id',
        'product_id',
        'amount',
        'sub_total',
        'unit_id'
    ];
}
