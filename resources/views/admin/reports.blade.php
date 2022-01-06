@extends('layouts.dashboard')

@section('content')
<div class="recentOrders">
    <div class="cardHeader">
        <h4><strong>Timeline Report</strong></h4>
        <a href="{{ route('orders-report-export') }}" class="btn btn-success btn-sm">Export report</a>
    </div>
    <table class="table table-bordered table-lg table-hover">
        <thead class="thead-light">
            <tr>
                <th>Order Number</th>
                <th>Placed On</th>
                <th>Service Specification Uploaded On</th>
                <th>Signed Service Specification Uploaded On</th>
                <th>Invoice Uploaded On</th>
                <th>Proof of Payment Uploaded On</th>
                <th>Receipt Uploaded On</th>
                <th>Data Uploaded On</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($order_dates as $order_date)
            <tr>
                <td>{{ $order_date->order_numbered }}</td>
                <td>{{ $order_date->ordercreated_date }}</td>
                <td>{{ $order_date->service_date }}</td>
                <td>{{ $order_date->signedservi_date }}</td>
                <td>{{ $order_date->invoice_date }}</td>
                <td>{{ $order_date->payment_date }}</td>
                <td>{{ $order_date->receipt_date }}</td>
                <td>{{ $order_date->dataupload_date }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{ $order_dates->links() }}
    </ul>
</div>
@endsection