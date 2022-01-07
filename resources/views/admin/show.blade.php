@extends('layouts.dashboard')

@section('content')
    <div class="recentOrders">
        <div class="cardHeader">
            <h4><strong>Order Details</strong></h4>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-6">
                        <h6 class="text-left"><b>Order Number:</b> <u>{{ $order->order_number }}</u></h6>
                    </div>
                    <div class="col-6">
                        <h6 class="text-right"><b>Date Placed:</b> <u>{{ $order->created_at->toFormattedDateString() }}</u></h6>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <h6 class="text-left"><b>Placed By:</b> <u>{{ $order->user->name }}</u></h6>
                    </div>
                    <div class="col-4">
                        <h6><b>Email:</b> <u>{{ $order->user->email }}</u></h6>
                    </div>
                    <div class="col-4">
                        <h6 class="text-right"><b>Phone:</b> <u>{{ $order->phone }}</u></h6>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <h6 class="text-left"><b>Researcher:</b> <u>{{ $order->researcher }}</u></h6>
                    </div>
                    <div class="col-4">
                        <h6><b>Investigator:</b> <u>{{ $order->investigator }}</u></h6>
                    </div>
                    <div class="col-4">
                        <h6 class="text-right"><b>Order Status:</b> 
                            <span><a href="{{ route('all-orders.get-status', $order->id) }}" class="text-primary"><i class="fa fa-edit"></i>update</a></span>
                        </h6> 
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <h6 class="text-left"><b>Department:</b> <u>{{ $order->department }}</u></h6>
                    </div>
                    <div class="col-4">
                        <h6><b>Institution:</b> <u>{{ $order->institution }}</u></h6>
                    </div>
                    <div class="col-4">
                        <h6 class="text-right"><b>Billing:</b> <u>{{ $order->billing }}</u></h6>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <h6 class="text-left"><b>Address:</b> <u>{{ $order->address }}</u></h6>
                    </div>
                    <div class="col-4">
                        <h6><b>City:</b> <u>{{ $order->city }}</u></h6>
                    </div>
                    <div class="col-4">
                        <h6 class="text-right"><b>Country:</b> <u>{{ $order->country }}</u></h6>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <h6 class="text-left"><b>Service Specification:</b> 
                            @if($order->service_speci === null)
                                <span scope="row">
                                    <a href="{{ route('all-orders.get-service', $order->id) }}" class="text-primary">
                                        <i class="fa fa-upload"></i>upload
                                    </a> 
                                </span>
                            @else
                                <span scope="row">
                                    <a href="/service_speci/download/{{$order->id}}/{{$order->service_speci}}" class="ilricolor"><u>{{ $order->service_speci }}</u></a>
                                    <a href="{{ route('all-orders.get-service', $order->id) }}" class="text-success">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </span>
                            @endif
                        </h6>
                    </div>
                    <div class="col-4">
                        <h6><b>Service Specification:</b>
                            @if($order->signed_service_speci === null)
                                <span scope="row"><p class="badge badge-warning">pending</p></span>
                            @else
                                <span scope="row"><a href="/signed/download/{{$order->id}}/{{$order->signed_service_speci}}" class="text-success"><u>download</u></a></span>
                            @endif
                        </h6>
                    </div>
                    <div class="col-4">
                        <h6 class="text-right"><b>Invoice:</b>
                            @if($order->invoice === null)
                                <span scope="row">
                                    <a href="{{ route('all-orders.get-invoice', $order->id) }}" class="text-primary">
                                        <i class="fa fa-upload"></i>upload
                                    </a> 
                                </span>
                            @else
                                <span scope="row">
                                    <a href="/invoice/download/{{$order->id}}/{{$order->invoice}}" class="ilricolor"><u>{{ $order->invoice }}</u></a>
                                    <a href="{{ route('all-orders.get-invoice', $order->id) }}" class="text-success">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </span>
                            @endif
                        </h6>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <h6 class="text-left"><b>Proof of Payment:</b> 
                            @if($order->payment === null)
                                <span scope="row"><p class="badge badge-warning">pending</p></span>
                            @else
                                <span scope="row"><a href="/payment/download/{{$order->id}}/{{$order->payment}}" class="text-success"><u>download</u></a></span>
                            @endif
                        </h6>
                    </div>
                    <div class="col-4">
                        <h6><b>Receipt:</b>
                            @if($order->receipt === null)
                                <span>
                                    <a href="{{ route('all-orders.get-receipt', $order->id) }}" class="text-primary">
                                        <i class="fa fa-upload"></i>upload
                                    </a> 
                                </span>
                            @else
                                <span>
                                    <a href="/receipt/download/{{$order->id}}/{{$order->receipt}}" class="ilricolor"><u>{{ $order->receipt }}</u></a>
                                    <a href="{{ route('all-orders.get-receipt', $order->id) }}" class="text-success">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </span>
                            @endif
                        </h6>
                    </div>
                    <div class="col-4">
                        <h6 class="text-right"><b>Data:</b>
                            @if($order->data === null)
                                <span>
                                    <a href="{{ route('all-orders.get-data', $order->id) }}" class="text-primary">
                                        <i class="fa fa-upload"></i>upload
                                    </a> 
                                </span>
                            @else
                                <span>
                                    <a href="{{$order->data}}" target="_blank" class="text-success"><u>download here</u></a>
                                </span>
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
                    <th>Price(Usd)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order_services as $order_service)
                <tr>
                    <td>{{ $order_service->service->name }}</td>
                    <td class="text-left">{{ $order_service->service->description }}</td>
                    <td class="text-left">{{ $order_service->quantity }}</td>
                    <td class="text-left">${{ $order_service->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection