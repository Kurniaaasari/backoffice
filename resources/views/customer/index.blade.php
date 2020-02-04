@extends('customer/customer')
@section('content')

         
<!-- <div class="row"> -->
    <div class="col-12 table-responsive">
        <div class="card">
            <div class="card-header">
            <div>
            <a href="{{ url('/customer/create') }}" class="btn btn-dark btn-sm float-left">Add Customer</a>
            <form class="form-inline md-2 float-right" method="get" action="{{url('customer/search')}}">
            <input class="form-control mr-sm-2" type="text" name="q">
            <button class="btn btn-navbar"><input type="submit" value="Search">
            </form>
            </div>
            <div class="card-tools">
            </div>
        </div>
    </div>

<div class="card-body">
            @if (Session::has('message'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>NAME</th>
                                <th>ADDRESS</th>
                                <th>PHONE NUMBER</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($customer as $customer)
                            <tr>
                            <td class="text-center">{{ $customer['id_customer'] }}</td>
                                <td>{{ $customer['name'] }}</td>
                                <td>{{ $customer['address'] }}<br>
                                    <form method="POST" action="{{ URL::to('address/'.$customer['id_customer']) }}">
                                        {{ csrf_field() }}
                                        <div class="btn-group">
                                            <a class="btn-sm btn-success" href="{{ URL::to('customer/address/'.$customer['id_customer']) }}"><font size="2px">Other Address</font></a>
                                        </div>
                                    </form>
                                </td>
                                <td>{{ $customer['no_phone'] }}</td>
                                <td>{{ $customer['email'] }}</td>
                                <td>{{ $customer['password'] }}</td>
                                <td class="text-center">
                                    <form method="POST" action="{{ URL::to('/customer/'.$customer['id_customer']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <div class="btn-group">
                                            <!-- <a class="btn btn-info" href="{{ URL::to('/customer/show'.$customer['id_customer']) }}"><i class="fa fa-eye"></i></a> -->

                                            <a class="btn btn-success" href="{{ URL::to('/customer/'.$customer['id_customer'].'/edit') }}"><i class="fa fa-pencil"></i></a>

                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection