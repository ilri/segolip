@extends('layouts.dashboard')

@section('content')
<div class="recentOrders">
    <div class="row">
        <div class="col">
            @include('layouts.alerts')
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            @foreach ($errors->all() as $error)
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            @endforeach
        </div>
    @endif
    <div class="cardHeader"><h4><strong>Upload Service specification</strong></h4></div>
    <div class="card">
        <div class="card-body"> 
            <form class="form-horizontal" action="{{ route('all-orders.upload-service', $order->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group pb-2">
                    <label for="orderid">Order Number</label>
                    <input type="text" class="form-control" name="order_number" value="{{ $order->order_number }}" disabled>
                </div>

                <div class="form-group pb-2">
                    <label for="service_speci">Service Specification</label>
                    <input type="file" class="form-control-file pl-0" name="service_speci">
                </div>

                <div class="cart-buttons">
                    <a href="{{ route('allorders') }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                    <button type="submit" class="btn btn-sm btn-success float-right">Upload <i class="fa fa-angle-right"></i></button>
                </div>
            </form>                    
        </div>
    </div>
</div>
@endsection