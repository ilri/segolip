@extends('layouts.dashboard')

@section('content')
    <div class="recentOrders">
        <div class="row">
            <div class="col">
                @include('layouts.alerts')
            </div>
        </div>
        <div class="cardHeader"><h4><strong>{{ __('New Service') }}</strong></h4></div>
        <div class="card">
            <form method="POST" action="{{ route('services.store') }}">
                @csrf

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
                                <label for="description">{{ __('Description') }}</label>

                                <textarea name="description"
                                    rows="4" value="{{ old('description') }}"
                                    class="form-control @error('description') is-invalid @enderror" required></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="cost">{{ __('Cost') }} (USD)</label>

                                <input id="cost" type="text"
                                    class="form-control @error('cost') is-invalid @enderror" name="cost"
                                    value="{{ old('cost') }}" required>

                                @error('cost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">{{ __('Price') }} (USD)</label>

                                <input id="price" type="number"
                                    class="form-control @error('price') is-invalid @enderror" name="price"
                                    value="{{ old('price') }}" required>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="cart-buttons">
                            <a href="{{route('services.index')}}" class="btn btn-warning btn-sm"><i class="fa fa-angle-left"></i> {{ __('Back') }}</a>
                                <button type="submit" class="btn btn-success btn-sm float-right">
                                    {{ __('Submit') }}
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection