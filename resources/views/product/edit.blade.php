@extends('product/product')
@section('content')
<div class="row">
    <div class="col-12">
        {{ Form::model($product,['route'=>['product.update',$product['id_product']], 'files'=>true,'method'=>'PUT']) }}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">CHANGE PRODUCT DETAIL</h3>
            </div>
            <div class="card-body">
                @if(!empty($errors->all()))
                <div class="alert alert-danger">
                    {{ Html::ul($errors->all())}}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('storage/'.$product['image'])}}" width="100%" height="200">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('image', 'IMAGE') }}
                                    {{ Form::file('imageFile', ['class'=>'form-control']) }}  
                        </div>
                        <div class="form-group">
                        {{ Form::label('name_product', 'NAME PRODUCT') }}
                                    {{ Form::text('name_product', $product['name_product'], ['class'=>'form-control', 'placeholder'=>'Input Name of Product']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('dimension', 'DIMENSION') }}
                                    {{ Form::text('dimension', $product['dimension'], ['class'=>'form-control', 'placeholder'=>'Input Dimension of Product']) }}      
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            {{ Form::label('fabric', 'FABRIC') }}
                            {{ Form::text('fabric', $product['fabric'], ['class'=>'form-control', 'placeholder'=>'Input Product Fabric']) }}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('finish', 'FINISH') }}
                            {{ Form::select('finish', ['tabac'=>'Tabac',
                            'black'=>'Black'],null,
                            ['class'=>'form-control'])
                            }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('price', 'PRICE') }}
                            {{ Form::text('price', $product['price'], ['class'=>'form-control', 'placeholder'=>'Input Product Price']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
=======
                        {{ Form::label('fabric', 'FABRIC') }}
                                    {{ Form::text('fabric', $product['fabric'], ['class'=>'form-control', 'placeholder'=>'Input Fabric of Product']) }}   </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('finish', 'FINISH') }}
                                    {{ Form::select('finish', ['tabac'=>'Tabac', 'black'=>'Black'], null,
                                        ['class'=>'form-control']) }}        
                                </div>
                                <div class="form-group">
                                    {{ Form::label('price', 'PRICE') }}
                                    {{ Form::text('price', $product['price'], ['class'=>'form-control', 'placeholder'=>'Input Price of Product']) }}
                                </div>
                            </div>
                             <div class="col-md-6">
>>>>>>> master
                                <div class="form-group">
                                    {{ Form::label('id_category', 'CATEGORY') }}
                                    {{ Form::text('id_category', $product['category'], ['class'=>'form-control', 'placeholder'=>'Input Category of Product']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('code_product', 'CODE') }}
<<<<<<< HEAD
                                    {{ Form::text('code_product', $product['code_product'], ['class'=>'form-control', 'placeholder'=>'Input Code of Product']) }}
=======
                                    {{ Form::text('code_product', $product['code'], ['class'=>'form-control', 'placeholder'=>'Input Code of Product' ]) }}
>>>>>>> master
                                </div>
                            </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('stock', 'STOCK') }}
<<<<<<< HEAD
                                    {{ Form::text('stock', $product['stock'], ['class'=>'form-control', 'placeholder'=>'Input Price of Product']) }}
                                </div>
                                <div class="form-group">
                                {{ Form::label('description', 'DESCRIPTION') }}
                                {{ Form::textarea('description', $product['description'], ['class'=>'form-control', 'placeholder'=>'Enter Description', 'rows'=>5]) }}
=======
                                    {{ Form::text('stock',$product['stock'], ['class'=>'form-control', 'placeholder'=>'Input Price of Product']) }}
                                </div>
                                <div class="form-group">
                                {{ Form::label('description', 'DESCRIPTION') }}
                                {{ Form::textarea('description',$product['description'], ['class'=>'form-control', 'placeholder'=>'Enter Description', 'rows'=>5]) }}
                            </div>
                            </div>
                        </div>
>>>>>>> master
                    </div>
            <div class="card-footer">
                <a href="{{ URL::to('product') }}" class="btn btn-outline-info">Back</a>
                {{ Form::submit('Save', ['class' => 'btn btn-primary pull-right']) }}
            </div>
        </div>
        <!-- </form> -->
        {{ Form::close() }}
    </div>
</div>
@endsection