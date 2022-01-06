@extends('layouts.dashboard')

@section('content')
    <div class="recentOrders">
        <div class="row">
            <div class="col">
                @include('layouts.alerts')
            </div>
        </div>
        <div class="cardHeader">
            <h4><strong>{{ __('All Services') }}</strong></h4>
            <a href="{{ route('services.create') }}" class="btn btn-success btn-sm">Add New</a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Service</th>
                    <th>Description</th>
                    <th>Cost (USD)</th>
                    <th>Price (USD)(Numeric)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td class="text-left">{{ $service->description }}</td>
                    <td class="text-left">{{ $service->cost }}</td>
                    <td class="text-center">{{ $service->price }}</td>
                    <td>
                        <a href="{{ route('services.edit', $service) }}"
                            class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>

                        <form style="display: inline-block"
                            action="{{ route('services.destroy', $service) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')"
                                class="btn btn-outline-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>
                        <h5>No Services to show!</h5>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <ul class="pagination">
            {{ $services->links() }}
        </ul>
    </div>
@endsection