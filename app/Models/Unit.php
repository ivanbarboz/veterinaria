<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->using(ProductUnit::class)
            ->withPivot([
                'current_stock',
                'stock',
                'last_supply'
            ]);
    }
}
