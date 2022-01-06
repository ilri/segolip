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
                        <h5><i class="fa fa-check-square-o"></i> <strong>Submit Request</strong></h5>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Service</th>
                                        <th>Description</th>
                                        <th>No. of Samples/Plates</th>
                                        <th>Sub total (USD)</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach(Cart::content() as $item)
                                    <tr>
                                        <td><strong>{{ $item->name }}</strong></td>
                                        <td>{{ $item->model->description }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->subtotal }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot class="table-dark">
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong></strong></td>
                                        <td><strong></strong></td>
                                        <td><strong>Total Cost : ${{ Cart::subtotal() }}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5 mb-3">
                        <div class="card rounded-0">
                            <div class="card-header"><strong>Contact Information</strong></div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('checkout.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
                                    <div class="quad-form">
                                        <div class="form-group">
                                            <label for="date">Date*</label>
                                            <input type="date" class="form-control" id="date" name="date" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="researcher">Name of Researcher*</label>
                                            <input type="text" class="form-control" id="researcher" name="researcher" value="{{ Auth::user()->name }}" readonly required>
                                        </div>
                                        <div class="form-group">
                                            <label for="investigator">Principal Investigator*</label>
                                            <input type="text" class="form-control" id="investigator" name="investigator" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="department">Department*</label>
                                            <input type="text" class="form-control" id="department" name="department" required>
                                        </div>
                                    </div>

                                    <div class="quad-form">
                                        <div class="form-group">
                                            <label for="institution">Institution*</label>
                                            <input type="text" class="form-control" id="institution" name="institution" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="billing">Billing*</label>
                                            <select class="form-control" id="billing" name="billing" onchange="showfield(this.options[this.selectedIndex].value)" required>
                                                <option disabled selected>select...</option>
                                                <option value="invoice">Invoice</option>
                                                <option value="cost_centre">Cost centre</option>
                                            </select>
                                            <div id="div1" class="mt-1"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address*</label>
                                            <input type="text" class="form-control" id="address" name="address" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City/State*</label>
                                            <input type="text" class="form-control" id="city" name="city" required>
                                        </div>
                                    </div>

                                    <div class="quad-form">
                                        <div class="form-group">
                                            <label for="country">Country*</label>
                                            <input type="text" class="form-control" id="country" name="country" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="zipcode">Zip Code*</label>
                                            <input type="text" class="form-control" id="zipcode" name="zipcode" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Telephone*</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="fax_number">Fax Number*</label>
                                            <input type="text" class="form-control" id="fax_number" name="fax_number" required>
                                        </div>
                                    </div>

                                    <div class="quad-form">
                                        <div class="form-group">
                                            <label for="email">Email Address*</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alter_email">Alternative Email</label>
                                            <input type="email" class="form-control" id="alter_email" name="alter_email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="file">Upload Form*</label>
                                            <input type="file" class="form-control" id="form" name="form" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Gel Images (Only sanger sequencing*)</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <a href="{{ route('cart.index') }}" class="btn btn-warning mr-2"><i class="fa fa-angle-left"></i> Back</a>

                                        <button type="submit" class="btn btn-success float-right">Place Request <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        function showfield(name) {
            if (name == 'cost_centre') document.getElementById('div1').innerHTML = '<input type="text" class="form-control" name="billing" placeholder="charge code" />';
            else document.getElementById('div1').innerHTML = '';
        }
    </script>
@endsection