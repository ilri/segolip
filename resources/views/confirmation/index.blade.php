@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @include('layouts.alerts')
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fa fa-thumb-tack"></i> <strong>Request Confirmation</strong></h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3" style="text-align: center">
                                <h4><b>Your request has been placed!</b></h4>
                                <p>You'll be notified once we process your order!</p>
                                <a href="{{ route('ordering') }}" class="btn btn-md btn-warning text-uppercase">
                                    Request another Service
                                </a>
                                <a href="{{ route('myorders') }}" class="btn btn-md btn-success text-uppercase">
                                    Go to My Orders
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
