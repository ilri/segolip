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
                <!-- <th>Service Specification</th>
                <th>Signed Service Specification</th>
                <th>Invoice</th>
                <th>Payment of Payment</th>
                <th>Receipt</th>
                <th>Data</th> -->
                <th>Total Price(Usd)</th>
                <th>Status</th>
                <th>Details</th>
                <!-- <th>Actions</th> -->
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
                <!-- @if($order->service_speci === null)
                    <td scope="row">
                        <a href="{{ route('all-orders.get-service', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-upload">upload</i>
                        </a> 
                    </td>
                @else
                    <td scope="row">
                        <a href="/service_speci/download/{{$order->id}}/{{$order->service_speci}}">{{ $order->service_speci }}</a>
                        <a href="{{ route('all-orders.get-service', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-refresh"></i>
                        </a>
                    </td>
                @endif
                @if($order->signed_service_speci === null)
                    <td scope="row"><p class="badge badge-light">pending!</p></td>
                @else
                    <td scope="row"><a href="/signed/download/{{$order->id}}/{{$order->signed_service_speci}}">Download</a></td>
                @endif
                @if($order->invoice === null)
                    <td scope="row">
                        <a href="{{ route('all-orders.get-invoice', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-upload">upload</i>
                        </a> 
                    </td>
                @else
                    <td scope="row">
                        <a href="/invoice/download/{{$order->id}}/{{$order->invoice}}">{{ $order->invoice }}</a>
                        <a href="{{ route('all-orders.get-invoice', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-refresh"></i>
                        </a>
                    </td>
                @endif
                @if($order->payment === null)
                    <td scope="row"><p class="badge badge-light">pending!</p></td>
                @else
                    <td scope="row"><a href="/payment/download/{{$order->id}}/{{$order->payment}}">Download</a></td>
                @endif
                @if($order->receipt === null)
                    <td scope="row">
                        <a href="{{ route('all-orders.get-receipt', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-upload">upload</i>
                        </a> 
                    </td>
                @else
                    <td scope="row">
                        <a href="/receipt/download/{{$order->id}}/{{$order->receipt}}">{{ $order->receipt }}</a>
                        <a href="{{ route('all-orders.get-receipt', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-refresh"></i>
                        </a>
                    </td>
                @endif
                @if($order->data === null)
                    <td scope="row">
                        <a href="{{ route('all-orders.get-data', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-upload">upload</i>
                        </a> 
                    </td>
                @else
                    <td scope="row">
                        <a href="{{$order->data}}" target="_blank">download</a>
                    </td>
                @endif -->
                <td>${{ $order->order_total }}</td>
                @if ($order->status === 1)
                    <td scope="row"><p class="badge badge-warning">placed</p></td>
                @elseif ($order->status === 2)
                    <td scope="row"><p class="badge badge-info">processing</p></td>
                @else
                    <td scope="row"><p class="badge badge-success">completed</p></td>
                @endif
                <td class="text-left"><a href="{{ route('all-orders.show', $order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> view</a></td>
                <!-- <td class="text-left"><a href="{{ route('all-orders.get-status', $order->id) }}" class="btn btn-sm btn-outline-success"><i class="fa fa-eye"></i>update</a></td> -->
            </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{ $orders->links() }}
    </ul>
</div>
@endsection