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
    <div class="col-12">
        <div class="card1">
            <div class="card-header">
            <div class="container">
                <form class="form-inline md-2 float-right" method="POST" action="{{url('customer/search')}}" role="search">
                    <div class="input-group input-group-sm">
                    {{ csrf_field() }}
                      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search" value="{{isset($query)?$query:""}}">
                        <span class="input-group-btn">
                            <button class="btn btn-navbar"><input type="submit" value="Search">
                            </button>
                        </span>
                    </div>
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
                                <th>NO</th>
                                <th>NAME</th>
                                <th>PHONE NUMBER</th>
                                <th>EMAIL</th>
                                <th>ADDRESS</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @if(isset($customer))
                            <?php $no = 0 ;?>
                            @foreach($customer as $customer)
                            <?php $no++ ;?>
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td>{{ $customer['name'] }}</td>
                                <td>{{ $customer['no_phone'] }}</td>
                                <td>{{ $customer['email'] }}</td>
                                <td class="text-center">
                                    <form method="POST" action="{{ URL::to('/customer/'.$customer['id_customer']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <div class="btn-group">
                                            <!-- <a class="btn btn-success" href="{{ URL::to('/customer/'.$customer['id_customer'].'/edit') }}"><i class="fa fa-pencil"></i></a> -->
                                            <a class="btn-sm btn-dark" href="{{ URL::to('customer/address/'.$customer['id_customer']) }}"><font size="2px">Address</font></a>
                                            <!-- <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button> -->
                                        </div>
                                    </form>
                                    <!-- <form method="POST" action="{{ URL::to('address/'.$customer['id_customer']) }}">
                                        {{ csrf_field() }}
                                        <div class="btn-group">
                                            <a class="btn-sm btn-info" href="{{ URL::to('customer/address/'.$customer['id_customer']) }}"><font size="2px">Other Address</font></a>
                                        </div>
                                    </form> -->
                                </td>
                            </tr>
                            @endforeach
                            @else
                             <tr>
                                 <td colspan="7">
                                     {{$message}} 
                                 </td>
                             </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection