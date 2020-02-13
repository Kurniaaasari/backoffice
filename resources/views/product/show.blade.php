@extends('product/product')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DETAIL PRODUCT</h3>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$product['image1'])}}" width="75%" height="100%">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$product['image2'])}}" width="75%" height="100%">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$product['image3'])}}" width="75%" height="100%">
                        </div>
                    </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th width="250px">CODE</th>
                        <td>{{ $product['code_product'] }}</td>
                    </tr>
                    <tr>
                        <th width="250px">NAME</th>
                        <td>{{ $product['name_product'] }}</td>
                    </tr>
                    <tr>
                        <th>CATEGORY</th>
                        <td>{{ $product['category'] }}</td>
                    </tr>
                    <tr>
                        <th>DESCRIPTION</th>
                        <td>{{ $product['description'] }}</td>
                    </tr>
                    <tr>
                        <th>MATERIAL</th>
                        <td>{{ $product['material'] }}</td>
                    </tr>
                    <tr>
                        <th>FINISH</th>
                        <td>{{ $product['finish'] }}</td>
                    </tr>
                    <tr>
                        <th>DIMENSION</th>
                        <td>{{ $product['width'] }} x {{ $product['height'] }} x {{ $product['dense'] }}</td>
                    </tr>
                    <tr>
                        <th>DETAIL</th>
                        <td>- {{ $product['detail1'] }}<br>
                            - {{ $product['detail2'] }}<br>
                            - {{ $product['detail3'] }}</td>
                    </tr>
                    <tr>
                        <th>PRICE</th>
                        <td>$ {{ $product['price'] }}</td>
                    </tr>
                    <tr>
                        <th>STOCK</th>
                        <td>{{ $product['stock'] }}</td>
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ URL::to('product') }}" class="btn btn-outline-dark">Back</a>
            </div>
        </div>
</div>
@endsection