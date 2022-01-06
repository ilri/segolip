@extends('layouts.dashboard')

@section('content')
    <div class="recentOrders">
        <div class="cardHeader">
            <h4><strong>Order Details</strong></h4>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-4">
                        <h6 class="text-left"><b>Order Number:</b> <u>{{ $order->order_number }}</u></h6>
                    </div>
                    <div class="col-4">
                        <h6><b>Date Placed:</b> <u>{{ $order->created_at->toFormattedDateString() }}</u></h6>
                    </div>
                    <div class="col-4">
                        @if($order->status === 1)
                            <h6 class="text-right"><b>Order Status:</b> <span class="badge badge-warning">submitted</span></h6>
                        @elseif($order->status === 2)
                            <h6 class="text-right"><b>Order Status:</b> <span class="badge badge-info">processing</span></h6>
                        @else 
                            <h6 class="text-right"><b>Order Status:</b> <span class="badge badge-success">completed</span></h6>
                        @endif 
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <h6 class="text-left"><b>Service Specification:</b> 
                            @if($order->service_speci === null)
                                <span scope="row"><p class="badge badge-warning">pending</p></span>
                            @else
                                <span scope="row"><a href="/service_speci/download/{{$order->id}}/{{$order->service_speci}}" class="text-success"><u>download</u></a></span>
                            @endif
                        </h6>
                    </div>
                    <div class="col-4">
                        <h6><b>Signed Service Specification:</b> 
                            @if($order->signed_service_speci === null)
                                <span scope="row">
                                    <a href="{{ route('my-orders.get-signed', $order->id) }}" class="text-primary">
                                        <i class="fa fa-upload"></i>upload
                                    </a> 
                                </span>
                            @else
                                <span scope="row">
                                    <a href="/signed/download/{{$order->id}}/{{$order->signed_service_speci}}" class="ilricolor"><u>{{ $order->signed_service_speci }}</u></a>
                                    <a href="{{ route('my-orders.get-signed', $order->id) }}" class="text-success">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </span>
                            @endif
                        </h6>
                    </div>
                    <div class="col-4">
                        <h6 class="text-right"><b>Invoice:</b>
                            @if($order->invoice === null)
                                <span scope="row"><p class="badge badge-warning">pending</p></span>
                            @else
                                <span scope="row"><a href="/invoice/download/{{$order->id}}/{{$order->invoice}}" class="text-success"><u>download</u></a></span>
                            @endif
                        </h6>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <h6 class="text-left"><b>Proof of Payment:</b>
                            @if($order->payment === null)
                                <span scope="row">
                                    <a href="{{ route('my-orders.get-payment', $order->id) }}" class="text-primary">
                                        <i class="fa fa-upload"></i>upload
                                    </a> 
                                </span>
                            @else
                                <span scope="row">
                                    <a href="/payment/download/{{$order->id}}/{{$order->payment}}" class="ilricolor"><u>{{ $order->payment }}</u></a>
                                    <a href="{{ route('my-orders.get-payment', $order->id) }}" class="text-success">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </span>
                            @endif
                        </h6>
                    </div>
                    <div class="col-4">
                        <h6><b>Receipt:</b>
                            @if($order->receipt === null)
                                <span scope="row"><p class="badge badge-warning">pending</p></span>
                            @else
                                <span scope="row"><a href="/receipt/download/{{$order->id}}/{{$order->receipt}}" class="text-success"><u>download</u></a></span>
                            @endif
                        </h6>
                    </div>
                    <div class="col-4">
                        <h6 class="text-right"><b>Data:</b>
                            @if($order->data === null)
                                <span scope="row"><p class="badge badge-warning">pending</p></span>
                            @else
                                <span scope="row"><a href="{{$order->data}}" target="_blank" class="text-success"><u>download here</u></a></span>
                            @endif
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-sm table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Service</th>
                    <th>Details</th>
                    <th>No. of samples/plates</th>
                    <th>Price(USD)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order_services as $order_service)
                <tr>
                    <td>{{ $order_service->service->name }}</td>
                    <td class="text-left">{{ $order_service->service->description }}</td>
                    <td class="text-left">{{ $order_service->quantity }}</td>
                    <td class="text-left">{{ $order_service->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection