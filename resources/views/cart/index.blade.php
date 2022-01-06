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
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5><i class="fa fa-list"></i> <strong>Items</strong></h5>
                    </div>
                    @if(Cart::count() > 0)
                        <div class="card-body">
                            <table class="table mb-0 table-hover">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Description</th>
                                        <th>Cost (USD)</th>
                                        <th>No. of Samples/Plates</th>
                                        <th>Sub total (USD)</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach(Cart::content() as $item)
                                    <tr>
                                        <td><strong>{{ $item->name }}</strong></td>
                                        <td>{{ $item->model->description }}</td>
                                        <td>{{ $item->model->cost }}</td>
                                        <td>
                                            <form action="{{ route('cart.update', $item->rowId) }}" method="POST">
                                                @csrf
                                                @method('PATCH')

                                                <input type="hidden" name="proId" value="{{ $item->rowId }}"/>
                                                <input type="number" size="2" MIN="1" MAX="1000" name="qty" value="{{ $item->qty }}"/>
                                                <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-refresh"></i></button>
                                            </form>
                                        </td>
                                        <td>{{ $item->subtotal }}</td>
                                        <td>
                                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot class="table-dark">
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong></strong></td>
                                        <td><strong></strong></td>
                                        <td><strong></strong></td>
                                        <td><strong>Items Total:</strong></td>
                                        <td><strong> ${{ Cart::subtotal() }}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="cart-buttons">
                                <a href="{{ route('ordering') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                                <a href="{{ route('checkout.index') }}" class="btn btn-success float-right">Proceed <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    @else
                        <div class="card-body">
                            <h3>No items selected!</h3>
                            <div class="mb-5"></div>
                            <a href="{{ route('ordering') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Request a Service</a>
                            <div class="spacer"></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection