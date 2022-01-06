<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDate extends Model
{
    protected $fillable = ['order_id', 'order_numbered', 'ordercreated_date', 'service_date', 'signedservi_date', 'invoice_date', 'payment_date', 'receipt_date', 'dataupload_date'];
}
