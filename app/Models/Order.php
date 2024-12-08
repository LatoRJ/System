<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'Order_ID';

    protected $fillable = [
        'Customer_ID',
        'Cart_ID',
        'Total_Amount',
        'Order_Status',
    ];
    /*
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'Customer_ID', 'Customer_ID');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'Cart_ID', 'Cart_ID');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'Order_ID', 'Order_ID');
    }
    */

}