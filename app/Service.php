<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\OrderService;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'cost', 'price'];

    // relate with orders
    public function orders(){
        return $this->belongsToMany(Order::class, 'order_services');
    }

    // relate with order_services
    public function order_services()
    {
        return $this->hasMany(OrderService::class);
    }
}
