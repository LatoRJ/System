<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'Customer_ID';

    protected $fillable = [
        'First_Name',
        'Last_Name',
        'Email',
        'Contact_Number',
        'Line_Address_1',
        'Line_Address_2',
        'Barangay',
        'Municipality',
        'City',
        'Postal_Code',
        'User_Name',
        'Password',
        'Role',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'Customer_ID', 'Customer_ID');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'Customer_ID', 'Customer_ID');
    }
}

