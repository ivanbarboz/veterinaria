<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_code',
        'purchase_date',
        'total_price',
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
        return $this->belongsToMany(Product::class)
            ->using(PurchaseProduct::class)
            ->withPivot([
                'amount',
                'sub_total',
                'unit_id'
            ]);
    }
}
