@extends('product/product')
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
                .card1{
                    width: 100%;
                    /* height: 80px; */
                    margin: 10px 10px 10px 10px;
                    padding: 5px 5px 5px 5px;
                    /* overflow-y: auto;
                    overflow-x: scroll; */
                }
                .row{
                    width: 100%;
                    /* height: 80px; */
                    /* margin: 10px 10px 10px 10px;
                    padding: 5px 5px 5px 5px; */
                    overflow-y: auto;
                    overflow-x: scroll;
                }
                

</style>
<div class="row">
    <div class="col-20">
        <div class="card1">
            <div class="card-header">
                <a href="{{ URL::to('product/create')}}" class="btn btn-tool">
                     <i class="fa fa-plus"></i>
                     &nbsp; Add
                 </a>
                <!-- <h3 class="card-title">PRODUCT</h3> -->
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
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>IMAGE 1</th>
                                <th>IMAGE 2</th>
                                <th>IMAGE 3</th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>DIMENSION</th>
                                <th>FABRIC</th>
                                <th>FINISH</th>
                                <th>PRICE</th>
                                <th>CATEGORY</th>
                                <th>CODE</th>
                                <th>STOCK</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($product as $product)
                            <tr>
                                <td class="text-center">{{ $product['id_product'] }}</td>
                                <td class="text-center"><img src="{{ asset('storage/'.$product['image1']) }}" width="100"/></td>
                                <td class="text-center"><img src="{{ asset('storage/'.$product['image2']) }}" width="100"/></td>
                                <td class="text-center"><img src="{{ asset('storage/'.$product['image3']) }}" width="100"/></td>
                                <td>{{ $product['name_product'] }}</td>
                                <td>{{ $product['description'] }}</td>
                                <td>{{ $product['dimension'] }}</td>
                                <td>{{ $product['fabric'] }}</td>
                                <td>{{ $product['finish'] }}</td>
                                <td>$. {{ $product['price'] }}</td>
                                <td>{{ $product['id_category'] }}</td>
                                <td>{{ $product['code_product'] }}</td>
                                <td>{{ $product['stock'] }}</td>
                                <td class="text-center">
                                    <form method="POST" action="{{ URL::to('/product/'.$product['id_product']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <div class="btn-group">
                                            <a class="btn btn-info" href="{{ URL::to('/product/show'.$product['id_product']) }}"><i class="fa fa-eye"></i></a>

                                            <a class="btn btn-success" href="{{ URL::to('/product/'.$product['id_product'].'/edit') }}"><i class="fa fa-pencil"></i></a>

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