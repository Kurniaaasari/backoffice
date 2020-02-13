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
                    /* overflow-y: auto;
                    overflow-x: scroll; */
                }
                

</style>

<div class="row">  
     <div class="col-sm-12"> 
         <div class="card1"> 
            <div class="card-header">
            <div class="btn-group">

            <a href="{{ url('/product/create') }}" class="btn btn-dark btn-sm float">Add Product</a>
            <div class="container">
                <form class="form-inline md-2 float-right" method="POST" action="{{url('product/search')}}" role="search">
                    <div class="input-group input-group-sm">
                    {{ csrf_field() }}
                      <input class="form-control mr-sm-2" type="text" name="q" placeholder="" aria-label="Search" value="{{isset($query)?$query:""}}">
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
                                <th>NO</th>
                                <th>IMAGE</th>
                                <!-- <th>IMAGE 2</th>
                                <th>IMAGE 3</th> -->
                                <th>NAME</th>
                                <!-- <th>DESCRIPTION</th>
                                <th>MATERIAL</th>
                                <th>FINISH</th> -->
                                <th>DIMENSION</th>
                                <!-- <th>HEIGHT</th>
                                <th>DENSE</th> -->
                                <th>PRICE</th>
                                <!-- <th>DETAIL 1</th>
                                <th>DETAIL 2</th>
                                <th>DETAIL 3</th> -->
                                <th>CATEGORY</th>
                                <!-- <th>CODE</th> -->
                                <th>STOCK</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($product))
                            <?php $no = 0 ;?>
                            @foreach($product as $product)
                            <?php $no++ ;?>
                            <tr class="text-center">
                                <td>{{ $no }}</td>
                                <td class="text-center"><img src="{{ asset('storage/'.$product['image1']) }}" width="100"/></td>
                                <!-- <td class="text-center"><img src="{{ asset('storage/'.$product['image2']) }}" width="100"/></td>
                                <td class="text-center"><img src="{{ asset('storage/'.$product['image3']) }}" width="100"/></td> -->
                                <td>{{ $product['name_product'] }}<br>
                                    {{ $product['code_product'] }}
                                </td>
                                <!-- <td>{{ $product['description'] }}</td>
                                <td>{{ $product['material'] }}</td>
                                <td>{{ $product['finish'] }}</td> -->
                                <td>{{ $product['width'] }} x {{ $product['height'] }} x {{ $product['dense'] }}</td>
                                <td>$ {{ $product['price'] }}</td>
                                <td>{{ $product['category'] }}</td>
                                <!-- <td>{{ $product['detail1'] }}</td>
                                <td>{{ $product['detail2'] }}</td>
                                <td>{{ $product['detail3'] }}</td> -->
                                <td>{{ $product['stock'] }}</td>
                                <td class="text-center">
                                    <form method="POST" action="{{ URL::to('/product/'.$product['id_product']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <div class="btn-group">
                                            <a class="btn btn-info" href="{{ URL::to('/product/'.$product['id_product']) }}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-success" href="{{ URL::to('/product/'.$product['id_product'].'/edit') }}"><i class="fa fa-pencil"></i></a>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                             <tr>
                                 <td colspan="19">
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
</div>

@endsection