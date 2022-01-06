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
    <div class="cardHeader"><h4><strong>Change Status</strong></h4></div>
    <div class="card">
        <div class="card-body"> 
            <form class="form-horizontal" action="{{ route('all-orders.update-status', $order->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group pb-2">
                    <label for="orderid">Order Number</label>
                    <input type="text" class="form-control" name="order_number" value="{{ $order->order_number }}" readonly>
                </div>

                <div class="form-group pb-2">
                    <label for="status">Status</label>
                    <select class="form-inline" name="status">
                        @if ($order->status === 1)
                            <option value="1">{{"Placed"}}</option>
                            <option value="2">Processing</option>
                            <option value="3">Completed</option>
                        @endif
                        @if ($order->status === 2) {
                            <option value="2">{{"Processing"}}</option>
                            <option value="3">Completed</option>
                        @endif
                        @if ($order->status === 3) {
                            <option value="3">{{"Completed"}}</option>
                        @endif
                    </select>
                </div>

                <div class="cart-buttons">
                    <a href="{{ route('allorders') }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                    <button type="submit" class="btn btn-sm btn-success float-right">Update <i class="fa fa-angle-right"></i></button>
                </div>
            </form>                    
        </div>
    </div>
</div>
@endsection