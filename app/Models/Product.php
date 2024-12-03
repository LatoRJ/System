<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'Product_ID';

    protected $fillable = [
        'Product_Name',
        'Price',
        'Product_Quantity',
        'Product_Description',
        'Category_ID',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'Category_ID', 'Category_ID');
    }

    public function stockHistories()
    {
        return $this->hasMany(StockHistory::class, 'Product_ID', 'Product_ID');
    }
}

