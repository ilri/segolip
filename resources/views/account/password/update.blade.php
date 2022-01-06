@extends('layouts.dashboard')

@section('content')
<div class="recentOrders">
    <div class="row">
        <div class="col">
            @include('layouts.alerts')
        </div>
    </div>
    <div class="cardHeader"><h4><strong>Change Password</strong></h4></div>
    <div class="card">
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}" aria-label="{{ __('changePassword') }}">
                @csrf

                <div class="form-group pb-2">
                    <label for="current-password"><b>{{ __('Current Password') }}</b></label>

                    <!-- <div class="col-md-6"> -->
                        <input id="current-password" type="password" class="form-control{{ $errors->has('current-password') ? ' is-invalid' : '' }}" name="current-password" required autofocus>
                    <!-- </div> -->
                </div>

                <div class="form-group pb-2">
                    <label for="password"><b>{{ __('New Password') }}</b></label>

                    <!-- <div class="col-md-6"> -->
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <!-- </div> -->
                </div>

                <div class="form-group pb-2">
                    <label for="password-confirm"><b>{{ __('Confirm Password') }}</b></label>

                    <!-- <div class="col-md-6"> -->
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <!-- </div> -->
                </div>

                <div class="cart-buttons">
                    <!-- <div class="col-md-6"> -->
                        <a href="{{ route('useraccount') }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                    <!-- </div> -->
                    <!-- <div class="col-md-6"> -->
                        <button type="submit" class="btn btn-success btn-sm float-right">
                            {{ __('Update Password') }}
                            <i class="fa fa-angle-right"></i>
                        </button>
                    <!-- </div> -->
                </div>
                
            </form>                    
        </div>
    </div>
</div>
@endsection
