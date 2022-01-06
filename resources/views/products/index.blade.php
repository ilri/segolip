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
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="card-header"><b>{{ __('New Product') }}</b></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>

                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="price">{{ __('Price') }}</label>

                                    <input id="price" type="number"
                                        class="form-control @error('price') is-invalid @enderror" name="price"
                                        value="{{ old('price') }}" required>

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">
                                        {{ __('Add') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <hr />
            <div class="card">
                <div class="card-header"><b>{{ __('My Products') }}</b></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Details</th>
                                <th>Report</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    @if ($product->photo)
                                    <img src="{{ asset('/storage/images/products/'.$product->photo) }}" alt="photo"
                                        width="40">
                                    @endif
                                </td>
                                <td>{{ $product->details }}</td>
                                <td>{{ $product->report }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product) }}"
                                        class="btn btn-outline-info btn-sm">e</a>

                                    <a href="{{ route('products.show', $product) }}"
                                        class="btn btn-outline-success btn-sm">+</a>

                                    <a href="{{ route('products.goToReport', $product) }}"
                                        class="btn btn-outline-primary btn-sm">u</a>

                                    <form style="display: inline-block"
                                        action="{{ route('products.destroy', $product) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure?')"
                                            class="btn btn-outline-danger btn-sm" type="submit">x</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <h5>No Products to show!</h5>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- @livewire('counter') --}}
        </div>
    </div>
</div>
@endsection