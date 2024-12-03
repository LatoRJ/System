<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'Cart_ID';

    protected $fillable = [
        'Customer_ID',
        'Product_ID',
        'Quantity',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'Customer_ID', 'Customer_ID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_ID', 'Product_ID');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'Cart_ID', 'Cart_ID');
    }
}

