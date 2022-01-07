@extends('layouts.dashboard')

@section('content')
<div class="recentOrders">
    <div class="cardHeader">
        <h4><strong>All Orders</strong></h4>
    </div>
    <table class="table table-bordered table-lg table-hover">
        <thead class="thead-light">
            <tr>
                <th>Order Number</th>
                <th>Form</th>
                <th>Gel Image</th>
                <th>Total Price(Usd)</th>
                <th>Status</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->order_number }}</td>
                <td scope="row" class="text-left"><a href="/form/download/{{$order->id}}/{{$order->form}}" class="text-success"><u>{{ $order->form }}</u></a></td>
                @if($order->image === null)
                    <td class="text-left"><p class="badge badge-light">not applicable</p></td>
                @else
                    <td class="text-left"><a href="/image/download/{{$order->id}}/{{$order->image}}" class="text-success"><u>download</u></a></td>
                @endif
                <td>${{ $order->order_total }}</td>
                @if ($order->status === 1)
                    <td scope="row"><p class="badge badge-warning">placed</p></td>
                @elseif ($order->status === 2)
                    <td scope="row"><p class="badge badge-info">processing</p></td>
                @else
                    <td scope="row"><p class="badge badge-success">completed</p></td>
                @endif
                <td class="text-left"><a href="{{ route('all-orders.show', $order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> view</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{ $orders->links() }}
    </ul>
</div>
@endsection