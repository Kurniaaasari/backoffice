@extends('product/product')
@section('content')

{{-- <div class="row"> --}}
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <div>
            <a href="{{ url('/product/create') }}" class="btn btn-dark btn-sm float-left">Add Product</a>
             <div class="container">
            <form class="form-inline ml-3" action="{{ url('/product/search') }}" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group input-group-sm">
        <input class="form-control" name="q" type="text" placeholder="Search" aria-label="Search" value="{{isset($query)?$query:""}}">
        <span class="input-group-btn">
            <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </span>
            </div>
         <!-- <h3 class="card-title">PRODUCT</h3> -->      
        </div>
      </div>
    </form>
    </div>
         <div class="card-body">
            @if (Session::has('message'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>IMAGE 1</th>
                                <th>IMAGE 2</th>
                                <th>IMAGE 3</th>
                                <th>NAME</th>
                                <th>CODE</th>
                                <th>CATEGORY</th>
                                <th>MATERIAL</th>
                                <th>FINISH</th>
                                <th>WIDTH</th>
                                <th>HEIGHT</th>
                                <th>DENSE</th>
                                <th>PRICE</th>
                                <th>STOCK</th>
                                <th>DETAIL 1</th>
                                <th>DETAIL 2</th>
                                <th>DETAIL 3</th>
                                <th>DESCRIPTION</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @if(isset($product))
                            @foreach($product as $product)
                            <tr>
                                <td class="text-center">{{ $product['id_product'] }}</td>
                                <td class="text-center"><img src="{{ asset('storage/'.$product['image1']) }}" width="100"/></td>
                                <td class="text-center"><img src="{{ asset('storage/'.$product['image2']) }}" width="100"/></td>
                                <td class="text-center"><img src="{{ asset('storage/'.$product['image3']) }}" width="100"/></td>
                                <td>{{ $product['name_product'] }}</td>
                                <td>{{ $product['code_product'] }}</td>
                                <td>{{ $product['category'] }}</td>
                                <td>{{ $product['material'] }}</td>
                                <td>{{ $product['finish'] }}</td>
                                <td>{{ $product['width'] }}</td>
                                <td>{{ $product['height'] }}</td>
                                <td>{{ $product['dense'] }}</td>
                                <td>$ {{ $product['price'] }}</td>
                                <td>{{ $product['stock'] }}</td>
                                <td>{{ $product['detail1'] }}</td>
                                <td>{{ $product['detail2'] }}</td>
                                <td>{{ $product['detail3'] }}</td>
                                <td>{{ $product['description'] }}</td>
                              
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