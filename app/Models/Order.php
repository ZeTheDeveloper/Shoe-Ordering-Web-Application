<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subtotal',
        'ship_cost',
        'total',
        'status',
        'ordered_date',
    ];

    public $timestamps = false;

    public function getUser()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getProduct()
    {
        return $this->belongsToMany('App\Models\Product', 'order_items');
    }
}
