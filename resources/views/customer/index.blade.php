@extends('customer/customer')
@section('content')

<style> 
 .table{ 
                    width: 100%;
                    margin-top: 10px;
                    border-collapse: collapse;
                } 
               .table,.table th, .table td{
                    border: 1px solid #ddd;
                    /* border: 1px solid black; */
                    padding: 8px;
                    /* border: 1px solid #696969; */
                    /* padding: 10px; */
                    font-family: arial;
                    color: #000000;
                } 
                .table th{
                    /* width:100%; */
                    font-size: 14px;
                    background: #778899;
                }
                 .table td{ 
                    /* width:100%; */
                    background: #F8F8FA;
                    padding: 10px 10px;
                    font-size: 15px;
                }
              
 </style>            
<!-- <div class="row"> -->
    <div class="col-20">
        <div class="card1">
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
            <div class="row1">
                <div class="col-md-20">
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
                                <td>{{ $customer['address'] }}</td>
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