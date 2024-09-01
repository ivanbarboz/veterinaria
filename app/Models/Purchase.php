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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'purchase_product', 'purchase_id', 'product_id')
            ->using(PurchaseProduct::class)
            ->withPivot([
                'cantidad',
                'sub_total',
                'unit_id'
            ]);
    }
}
