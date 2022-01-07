@extends('layouts.dashboard')

@section('content')
<div class="recentOrders">
    <div class="cardHeader">
        <h4><strong>My Orders</strong></h4>
    </div>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Order number</th>
                <th>Form</th>
                <th>Gel Image</th>
                <!-- <th>Service Specification</th>
                <th>Signed Service Specification</th>
                <th>Invoice</th>
                <th>Proof of Payment</th>
                <th>Receipt</th>
                <th>Data</th> -->
                <th>Total Price(Usd)</th>
                <th>Status</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($orders as $order)
            <tr>
                <td>{{ $order->order_number }}</td>

                <td class="text-left"><a href="/form/download/{{$order->id}}/{{$order->form}}" class="text-success"><u>{{ $order->form }}</u></a></td>

                @if($order->image === null)
                    <td class="text-left"><p class="badge badge-light">not applicable</p></td>
                @else
                    <td class="text-left"><a href="/image/download/{{$order->id}}/{{$order->image}}" class="text-success"><u>download</u></a></td>
                @endif

                <!-- @if($order->service_speci === null)
                    <td scope="row"><p class="badge badge-light">pending!</p></td>
                @else
                    <td scope="row"><a href="/service_speci/download/{{$order->id}}/{{$order->service_speci}}">Download</a></td>
                @endif

                @if($order->signed_service_speci === null)
                    <td scope="row">
                        <a href="{{ route('my-orders.get-signed', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-upload">upload</i>
                        </a> 
                    </td>
                @else
                    <td scope="row">
                        <a href="/signed/download/{{$order->id}}/{{$order->signed_service_speci}}">{{ $order->signed_service_speci }}</a>
                        <a href="{{ route('my-orders.get-signed', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-refresh"></i>
                        </a>
                    </td>
                @endif

                @if($order->invoice === null)
                    <td scope="row"><p class="badge badge-light">pending!</p></td>
                @else
                    <td scope="row"><a href="/invoice/download/{{$order->id}}/{{$order->invoice}}">Download</a></td>
                @endif

                @if($order->payment === null)
                    <td scope="row">
                        <a href="{{ route('my-orders.get-payment', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-upload">upload</i>
                        </a> 
                    </td>
                @else
                    <td scope="row">
                        <a href="/payment/download/{{$order->id}}/{{$order->payment}}">{{ $order->payment }}</a>
                        <a href="{{ route('my-orders.get-payment', $order->id) }}" class="btn btn-outline-ilri btn-outline-success btn-sm">
                            <i class="fa fa-refresh"></i>
                        </a>
                    </td>
                @endif

                @if($order->receipt === null)
                    <td scope="row"><p class="badge badge-light">pending!</p></td>
                @else
                    <td scope="row"><a href="/receipt/download/{{$order->id}}/{{$order->receipt}}">Download</a></td>
                @endif

                @if($order->data === null)
                    <td scope="row"><p class="badge badge-light">pending!</p></td>
                @else
                    <td scope="row"><a href="{{$order->data}}" target="_blank">Download</a></td>
                @endif -->
                
                <td>${{ $order->order_total }}</td>

                @if ($order->status == 1)
                    <td scope="row"><p class="badge badge-warning">placed</p></td>
                @elseif ($order->status == 2)
                    <td scope="row"><p class="badge badge-info">processing</p></td>
                @else
                    <td scope="row"><p class="badge badge-success">completed</p></td>
                @endif

                <td class="text-left">
                    <a href="{{ route('my-orders.show', $order->id) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-eye"></i>view
                    </a> 
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center text-lg"><p>No records found!</p></td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        {{ $orders->links() }}
    </ul>
</div>
@endsection