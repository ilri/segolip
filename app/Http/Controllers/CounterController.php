<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function allCounters()
    {
        $orders = Order::all()->count();
        $users = User::all()->count();

        return view('layouts.card-box', compact(['orders','users']));
    }
}
