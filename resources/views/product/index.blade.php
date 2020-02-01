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
                    padding: 5px;
                    /* font-family: arial; */
                    color: #000000;
                }
                .table th{ 
                    font-size: 15px;
                    background: #778899;
                } */
                .table td{
                    background: #F8F8FF;
                    padding: 1px 1px;
                    font-size: 15px;
                }
                .card1{
                    width: 100%;
                    /* height: 80px; */
                    margin: 10px 10px 10px 10px;
                    padding: 1px 1px 1px 1px;
                  
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
     <div class="col-sm-10> 
         <div class="card1 "> 
            <div class="card-header">
            <div class="btn-group">

            <a href="{{ url('/product/create') }}" class="btn btn-dark btn-sm float">Add Product</a>
        <div>
            <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="" type="submit">
          <i class="fa fa-search"></i>
          </button>
          <div class="card-tools">
             </div>
        </div>
      </div>
    </form>
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
                    <div class=".table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>IMAGE 1</th>
                                <th>IMAGE 2</th>
                                <th>IMAGE 3</th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>MATERIAL</th>
                                <th>FINISH</th>
                                <th>WIDTH</th>
                                <th>HEIGHT</th>
                                <th>DENSE</th>
                                <th>PRICE</th>
                                <th>DETAIL 1</th>
                                <th>DETAIL 2</th>
                                <th>DETAIL 3</th>
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
                                <td>{{ $product['material'] }}</td>
                                <td>{{ $product['finish'] }}</td>
                                <td>{{ $product['width'] }}</td>
                                <td>{{ $product['height'] }}</td>
                                <td>{{ $product['dense'] }}</td>
                                <td>$ {{ $product['price'] }}</td>
                                <td>{{ $product['category'] }}</td>
                                <td>{{ $product['detail1'] }}</td>
                                <td>{{ $product['detail2'] }}</td>
                                <td>{{ $product['detail3'] }}</td>
                                <td>{{ $product['code_product'] }}</td>
                                <td>{{ $product['stock'] }}</td>
                                <td class="text-center">
                                    <form method="POST" action="{{ URL::to('/product/'.$product['id_product']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <div class="btn-group">
                                            <!-- <a class="btn btn-info" href="{{ URL::to('/product/show'.$product['id_product']) }}"><i class="fa fa-eye"></i></a> -->

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
</div>

@endsection