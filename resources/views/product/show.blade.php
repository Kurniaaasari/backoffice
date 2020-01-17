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
                        <div class="col-md-12">
                            <img src="{{ asset('storage/'.$product['image']) }}"
                                height="200" width="100%"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_product">NAME PRODUCT</label>
                                <input id_product="name_product" type="text" value="{{ $product['name_product'] }}" class="form-control" disabled />
                            </div>
                            <div class="form-group">
                                <label for="dimension">DIMENSION</label>
                                <input id_product="dimension" type="text" value="{{ $product['dimension'] }}" class="form-control" disabled />
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
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="code">CODE</label>
                                <input id_product="code" type="text" value="{{ $product['code'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock">STOCK</label>
                                <input id_product="fabric" type="text" value="{{ $product['stock'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">DESCRRIPTION</label>
                                <input id_product="description" type="text" value="{{ $product['description'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection