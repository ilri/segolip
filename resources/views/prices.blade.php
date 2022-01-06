@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Service</th>
                        <th>Description</th>
                        <th>Cost (USD)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->description }}</td>
                            <td>{{ $service->cost }}</td>
                            <td>
                                <form action="{{ route('cart.store', $service) }}" method="get">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $service->id }}">
                                    <input type="hidden" name="name" value="{{ $service->name }}">
                                    <input type="hidden" name="cost" value="{{ $service->cost }}">
                                    <input type="hidden" name="price" value="{{ $service->price }}">
                                    <input type="hidden" name="details" value="{{ $service->description }}">
                                    <div>
                                        <button type="submit" class="btn btn-success btn-sm">request service</button>
                                    </div>
                                </form>
                            </td>
                            <!-- <td></td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection