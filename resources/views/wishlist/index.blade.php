@extends('wishlist/wishlist')
@section('content')

<style> 
.table{
                    width: 100%;
                    margin-top: 10px;
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
<div class="row">
    <div class="col-20">
        <div class="card1">
            <div class="card-header">
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
                                <th>ID</th>
                                <th>CUSTOMER NAME</th>
                                <th>PRODUCT</th>
                                <th>MATERIAL</th>
                                <th>FINISH</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($data as $row)
                            <tr>
                                <td>{{ $row->id_wishlist}}</td>
                                <td>{{ $row->name}}</td>
                                <td>{{ $row->name_product}}</td> 
                                <td>{{ $row->material}}</td>
                                <td>{{ $row->finish}}</td>
                                <td>$ {{ $row->price}}</td>
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