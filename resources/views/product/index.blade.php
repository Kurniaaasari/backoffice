@extends('product/product')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Product Table</h3>
                <div class="card-tools">
                 <a href="{{ URL::to('product/create')}}" class="btn btn-tool">
                     <i class="fa fa-plus"></i>
                     &nbsp; Add
                 </a>
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
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>IMAGE</th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>DIMENSION</th>
                                <th>FABRIC</th>
                                <th>FINISH</th>
                                <th>PRICE</th>
                                <th>CATEGORY</th>
                                <th>CODE</th>
                                <th>STOCK</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $product)
                            <tr>
                                <td class="text-center">{{ $product['id_product'] }}</td>
                                <td class="text-center"><img src="{{ asset('storage/'.$product['image']) }}" width="100"/></td>
                                <td>{{ $product['name_product'] }}</td>
                                <td>{{ $product['description'] }}</td>
                                <td>{{ $product['dimension'] }}</td>
                                <td>{{ $product['fabric'] }}</td>
                                <td>{{ $product['finish'] }}</td>
                                <td>Rp. {{ $product['price'] }}</td>
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