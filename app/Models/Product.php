<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'productDesc',
        'productQty',
        'productPrice',
        'productImage'
    ];

    public $timestamps = false;

    public function getOrder()
    {
        return $this->belongsToMany('App\Models\Order', 'order_items');
    }
}
