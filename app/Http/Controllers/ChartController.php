<?php

namespace App\Http\Controllers;

use App\Order;
use App\Service;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function allCharts()
    {
        // Services
        $services = Service::join('order_services', 'services.id', '=', 'order_services.service_id')
            ->selectRaw('services.name, sum(order_services.quantity) as quantity_sold')
            ->groupBy(['services.name'])
            ->orderByDesc('quantity_sold')
            ->take(5)
            ->get();
        dd($services);
        $services = json_decode(json_encode($services), true);

        // Orders
        $current_month_orders = Order::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)->count();
        $last_month_orders = Order::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(1)->endOfMonth())->count();
        $last_month_but_one_orders = Order::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(2)->endOfMonth())->count();
        $last_month_but_two_orders = Order::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(3)->endOfMonth())->count();
        $last_month_but_three_orders = Order::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(4)->endOfMonth())->count();
        $last_month_but_four_orders = Order::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(5)->endOfMonth())->count();

        // Users
        $current_month_users = User::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)->count();
        $last_month_users = User::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(1)->endOfMonth())->count();
        $last_month_but_one_users = User::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(2)->endOfMonth())->count();
        $last_month_but_two_users = User::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(3)->endOfMonth())->count();
        $last_month_but_three_users = User::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(4)->endOfMonth())->count();
        $last_month_but_four_users = User::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->startOfMonth()->subMonth(5)->endOfMonth())->count();

        return view('admin.charts', compact(['services','current_month_orders','last_month_orders','last_month_but_one_orders','last_month_but_two_orders','last_month_but_three_orders','last_month_but_four_orders','current_month_users','last_month_users','last_month_but_one_users','last_month_but_two_users','last_month_but_three_users','last_month_but_four_users']));
    }

}
