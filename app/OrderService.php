<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class OrderService extends Model
{
    protected $fillable = ['order_id', 'service_id', 'quantity', 'price'];

    // relate to services
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // public function getCreatedAtDateAttribute($value) {
    //     return $value->format('Y-m-d');
    // }
}
