@extends('layouts.dashboard')

@section('content')
<div class="recentOrders">
    <div class="row">
        <div class="col">
            @include('layouts.alerts')
        </div>
    </div>
    <div class="cardHeader"><h4><strong>Edit Profile</strong></h4></div>
    <div class="card">
        <div class="card-body text-left"> 
            <form class="form-horizontal" method="POST" action="{{ route('editProfile', Auth::user()->id) }}" aria-label="{{ __('editProfile') }}">
                @csrf

                <div class="form-group pb-2">
                    <label for="name"><b>{{ __('Name') }}</b></label>

                    <!-- <div class="col-md-6"> -->
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" required autofocus>
                    <!-- </div> -->
                </div>

                <div class="form-group pb-2">
                    <label for="email"><b>{{ __('Email address') }}</b></label>

                    <!-- <div class="col-md-6"> -->
                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required autofocus>
                    <!-- </div> -->
                </div>

                <div class="cart-buttons">
                    <a href="{{ route('useraccount') }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                    <!-- <div class="col-md-6"> -->
                    <button type="submit" class="btn btn-success btn-sm float-right">
                        {{ __('Update Details') }}
                        <i class="fa fa-angle-right"></i>
                    </button>
                    <!-- </div> -->
                </div>

            </form>                    
        </div>
    </div>
</div>
@endsection
