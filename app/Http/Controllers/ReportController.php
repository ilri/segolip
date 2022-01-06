<?php

namespace App\Http\Controllers;

use App\Exports\OrdersReportExport;
use App\OrderDate;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function allReports()
    {
        $order_dates = OrderDate::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.reports', compact('order_dates'));
    }

    public function exportOrdersReport()
    {
        return Excel::download(new OrdersReportExport(), 'OrdersReport.xlsx');
    }
}
