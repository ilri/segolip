@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>All Todos <a href="{{ route('todos.index') }}">here</a></p>
                    <p>All Products <a href="{{ route('products.index') }}">here</a></p>
                    <p>All Services <a href="{{ route('services.index') }}">here</a></p>
                </div>

                <div class="card-body">
                    @include('layouts.alerts')
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="submit" value="Upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection