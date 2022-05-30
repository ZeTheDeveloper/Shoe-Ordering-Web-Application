<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    public $timestamps = false;

     protected $fillable = [
        'id',
        'order_id',
        'product_id',
    ];


}
