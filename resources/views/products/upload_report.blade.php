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
                @if ($errors->upload_details->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->upload_details->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('products.uploadReport', $product) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-header"><b>{{ __('Upload Report') }}</b></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="report" type="file" name="report" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">
                                        {{ __('Upload') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('products.index')}}" class="btn btn-warning">{{ __('Back') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection