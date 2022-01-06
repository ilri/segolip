@extends('layouts.dashboard')

@section('content')
    <div class="recentOrders">
        <div class="row">
            <div class="col">
                @include('layouts.alerts')
            </div>
        </div>
        <div class="cardHeader"><h4><strong>My Profile</strong></h4></div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-2 ml-1">
                    <h6 class="text-center"><b>Name:</b> {{ Auth::user()->name }}</h6>
                </div>

                <div class="row mb-2 ml-1">
                    <h6 class="text-center"><b>Email address:</b> {{ Auth::user()->email }}</h6>
                </div>

                <div class="row mb-2 ml-1">
                    <div>
                    <a href="{{ route('useraccount-edit') }}">Edit Account</a> | <a href="{{ route('change-password') }}">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
