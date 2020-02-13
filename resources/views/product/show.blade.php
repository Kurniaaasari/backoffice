@extends('product/product')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
<<<<<<< HEAD
                    <div class="card-header">
                        <h3 class="card-title">DETAIL PRODUCT</h3>
=======
                <div class="card-header">
                    <h3 class="card-title">DETAIL PRODUCT</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('storage/'.$product['image']) }}"
                                height="200" width="100%"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_product">NAME PRODUCT</label>
<<<<<<< Updated upstream
                                <input id_product="name_product" type="" value= "{{$product['name_product']}}" class="form-control" disabled />
=======
                                <input id_product="name_product" type="text" value= "{{ $product['name_product'] }}"  class="form-control" disabled />
>>>>>>> Stashed changes
                            </div>
                            <div class="form-group">
                                <label for="dimension">DIMENSION</label>
                                <input id_product="dimension" type="" value="{{ $product['dimension'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fabric">FABRIC</label>
                                <input id_product="fabric" type="text" value="{{ $product['fabric'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="finish">FINISH</label>
                                <input id_product="finish" type="text" value="{{ $product['finish'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">PRICE</label>
                                <input id_product="price" type="text" value="{{ $product['price'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">CATEGORY</label>
                                <input id_product="category" type="text" value="{{ $product['category'] }}" class="form-control" disabled />
                            </div>
                        </div>
>>>>>>> master
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$product['image1'])}}" width="75%" height="100%">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$product['image2'])}}" width="75%" height="100%">
                        </div>
<<<<<<< HEAD
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$product['image3'])}}" width="75%" height="100%">
=======
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">DESCRRIPTION</label>
                                <input id_product="description" type="text" value="{{ $product['description'] }}" class="form-control" disabled />
<<<<<<< Updated upstream
                                <!-- {{ Form::submit('Save', ['class' => 'btn btn-secondary pull-right']) }} -->
=======
>>>>>>> Stashed changes
                            </div>
>>>>>>> master
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