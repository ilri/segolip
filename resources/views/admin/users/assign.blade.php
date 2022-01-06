@extends('layouts.dashboard')

@section('content')
<div class="recentOrders">
    <div class="row">
        <div class="col">
            @include('layouts.alerts')
        </div>
    </div>
    <div class="cardHeader"><h4><strong>Assign Role</strong></h4></div>
    <div class="card">

        <div class="card-body text-left"> 
            <form class="form-horizontal" method="POST" action="{{ route('assignRole', $user->id) }}" aria-label="{{ __('assignRole') }}">
                @csrf

                <div class="form-group pb-2">
                    <label for="role"><b>{{ __('Role') }}</b></label>

                    <!-- <div class="col-md-6"> -->
                        <select class="custom-select" name="role" required>
                            <option selected>Choose a Role...</option>
                            <option value="admin">Admin</option> 
                            <option value="user">User</option> 
                        </select>

                        @if ($errors->has('role'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    <!-- </div> -->
                </div>

                <div class="cart-buttons">
                    <a href="{{ route('all-users') }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                    <button type="submit" class="btn btn-success btn-sm float-right">
                        {{ __('Assign Role') }}
                    </button>
                </div>

            </form>                    
        </div>
    </div>
</div>
@endsection