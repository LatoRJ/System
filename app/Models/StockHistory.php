<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockHistory extends Model
{
    use HasFactory;

    protected $primaryKey = 'Stock_ID';

    protected $fillable = [
        'Product_ID',
        'Stock_Change',
        'Action_Type',
        'Action_Date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_ID', 'Product_ID');
    }
}

