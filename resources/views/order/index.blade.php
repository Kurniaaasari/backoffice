@extends('order/order')
@section('content')

<style> 
.table{
                    width: 100%;
                    margin-top: 20px;
                    border-collapse: collapse;
                }
                .table th, .table td{
                    border: 1px solid #696969;
                    padding: 10px;
                    /* font-family: arial; */
                    color: #000000;
                }
                .table th{
                    font-size: 14px;
                    background: #778899;
                }
                .table td{
                    background: #F8F8FF;
                    padding: 10px 10px;
                    font-size: 15px;
                }
</style>
<!-- <div class="row"> -->
    <div class="col-20">
        <div class="card1">
            <div class="card-header">
            <div class="container">
                <form class="form-inline md-2 float-right" method="POST" action="{{url('order/search')}}" role="search">
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
                                <!-- <th>EMAIL</th>
                                <th>NUMBER PHONE</th>
                                <th>ADDRESS</th> -->
                                <th>DATE ORDER</th>
                                <th>TOTAL PAYMENT</th>
                                <th>STATUS</th>
                                <th>DETAIL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($order))
                            <?php $no = 0 ;?>
                            @foreach($order as $row)
                            <?php $no++ ;?>
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td>{{ $row->name}}</td>
                                <!-- <td>{{ $row->email}}</td>
                                <td>{{ $row->no_phone}}</td> 
                                <td>{{ $row->address}}</td>  --> 
                                <td>{{ $row->date_order}}</td>
                                <td>$ {{ $row->total_payment}}</td> 
                                <td>{{ $row->status}} </td> 
                                <td class="text-center">
                                    <form method="POST" action="{{ URL::to('detail/'.$row->id_order) }}">
                                        {{ csrf_field() }}
                                        <div class="btn-group">
                                            <a class="btn-sm btn-dark" href="{{ URL::to('order/detail/'.$row->id_order) }}"><font size="2px">Detail Order</font></a>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                             <tr>
                                 <td colspan="6">
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