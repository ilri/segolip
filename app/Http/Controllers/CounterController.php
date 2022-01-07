<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function allCounters()
    {
        $order_numbers = Order::all()->count();

        return view('layouts.card-box', compact(['order_numbers']));
    }
}
