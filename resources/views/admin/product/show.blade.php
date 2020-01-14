@extends('admin/admin')
@section('content')
    <div class="row">
    coba trus hapus
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Product</h3>
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
                                <label for="name_product">Nama Barang</label>
                                <input id_product="name_product" type="text" value="{{ $product['name_product'] }}" class="form-control" disabled />
                            </div>
                            <div class="form-group">
                                <label for="price">Harga Barang</label>
                                <input id_product="price" type="text" value="{{ $product['price'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input id_product="description" type="text" value="{{ $product['description'] }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection