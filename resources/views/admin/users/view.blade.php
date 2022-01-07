@extends('layouts.dashboard')

@section('content')
<div class="recentOrders">
    <div class="row">
        <div class="col">
            @include('layouts.alerts')
        </div>
    </div>
    <div class="cardHeader">
        <h4><strong>All Users</strong></h4>
    </div>
    <table class="table table-bordered table-lg table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col" class="text-left">Email address</th>
                <th scope="col" class="text-left">Role</th>
                <th scope="col" class="text-center">Assign/Remove Role</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td scope="row">{{ $user->name }}</td>
                <td scope="row" class="text-left">{{ $user->email }}</td>
                <td scope="row" class="text-left"> 
                    @foreach($user->roles as $role)
                            @if($user->roles->count()>1)
                            <label class="label label-primary">
                                {{ $role->name }}
                            </label> 
                            &nbsp 
                            @else
                            <label class="label label-primary">
                                {{ $role->name }}
                            </label>
                        @endif
                    @endforeach
                </td>
                <td scope="row" class="text-center">
                    <a href="{{ url('/assign/role', $user->id) }}">Assign</a>,
                    <a href="{{ url('/remove/role', $user->id) }}">Remove</a> 
                </td> 
            </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{ $users->links() }}
    </ul>
</div>
@endsection