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
            <form class="form-inline md-2 float-right" method="get" action="{{url('customer/search')}}">
            <input class="form-control mr-sm-2" type="text" name="q">
            <button class="btn btn-navbar"><input type="submit" value="Search">
            </form>
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
                                <th>NAME</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($detail as $detail)
                            <tr>
                                <td>{{ $detail->name_product}}</td>
                                <td>{{ $detail->price}}</td>
                                <td>{{ $detail->quantity}}</td>
                                <td>{{ $detail->total_payment}}</td> 
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