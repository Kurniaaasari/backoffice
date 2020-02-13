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
                    <div class="col-md-4">
                        <img src="{{ asset('storage/'.$product['image1'])}}" width="75%" height="100%">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('storage/'.$product['image2'])}}" width="75%" height="100%">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('storage/'.$product['image3'])}}" width="75%" height="100%">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('image1', 'IMAGE 1') }}
                        {{ Form::file('image1File', ['class'=>'form-control']) }}  
                        </div>
                        <div class="form-group">
                        {{ Form::label('image2', 'IMAGE 2') }}
                        {{ Form::file('image2File', ['class'=>'form-control']) }}  
                        </div>
                    </div>
                    <div class="col-md-6"> 
                        <div class="form-group">
                        {{ Form::label('image3', 'IMAGE 3') }}
                        {{ Form::file('image3File', ['class'=>'form-control']) }}  
                        </div>
                        <div class="form-group">
                        {{ Form::label('name_product', 'NAME PRODUCT') }}
                        {{ Form::text('name_product', $product['name_product'], ['class'=>'form-control', 'placeholder'=>'Input Name of Product']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('category', 'CATEGORY') }}
                            {{ Form::select('category', ['mirrors'=>'Mirrors','seating'=>'Seating','tables'=>'Tables','cabinet'=>'Cabinets','bedroom'=>'Bedroom'], null, ['class'=>'form-control']) }}  
                        </div>
                        <div class="form-group">
                            {{ Form::label('code_product', 'CODE') }}
                            {{ Form::text('code_product', $product['code'], ['class'=>'form-control', 'placeholder'=>'Input Code of Product' ]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('material', 'MATERIAL') }}
                            {{ Form::text('material', $product['material'], ['class'=>'form-control', 'placeholder'=>'Input Material of Product']) }}   
                        </div>
                        <div class="form-group">
                            {{ Form::label('finish', 'FINISH') }}
                            {{ Form::text('finish',$product['finish'],['class'=>'form-control','placeholder'=>'Input Finish of Product']) }}        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('price', 'PRICE') }}
                        {{ Form::text('price', $product['price'], ['class'=>'form-control', 'placeholder'=>'Input Price of Product']) }}
                        </div>
                        <div class="form-group">
                        {{ Form::label('stock', 'STOCK') }}
                        {{ Form::text('stock',$product['stock'], ['class'=>'form-control', 'placeholder'=>'Input Price of Product']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('detail1', 'DETAIL 1') }}
                        {{ Form::text('detail1',$product['detail1'], ['class'=>'form-control', 'placeholder'=>'Input Detail']) }}
                        </div>
                        <div class="form-group">
                        {{ Form::label('detail2', 'DETAIL 2') }}
                        {{ Form::text('detail2',$product['detail2'], ['class'=>'form-control', 'placeholder'=>'Input Detail']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('detail3', 'DETAIL 3') }}
                        {{ Form::text('detail3',$product['stock'], ['class'=>'form-control', 'placeholder'=>'Input Detail']) }}
                        </div>
                        <div class="form-group">
                        {{ Form::label('width', 'WIDTH') }}
                        {{ Form::text('width',$product['width'], ['class'=>'form-control', 'placeholder'=>'Input Width']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('height', 'HEIGHT') }}
                        {{ Form::text('height',$product['height'], ['class'=>'form-control', 'placeholder'=>'Input Height']) }}
                        </div>
                        <div class="form-group">
                        {{ Form::label('dense', 'DENSE') }}
                        {{ Form::text('dense',$product['dense'], ['class'=>'form-control', 'placeholder'=>'Input Dense']) }}
                        </div>
                    </div>
                    <div class="col-md-6"> 
                        <div class="form-group">
                        {{ Form::label('description', 'DESCRIPTION') }}
                        {{ Form::textarea('description',$product['description'], ['class'=>'form-control', 'placeholder'=>'Enter Description', 'rows'=>5]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="card-footer">
                <a href="{{ URL::to('product') }}" class="btn btn-outline-secondary">Back</a>
                {{ Form::submit('Save', ['class' => 'btn btn-secondary pull-right']) }}
            </div>
        </div>
        <!-- </form> -->
        {{ Form::close() }}
    </div>
</div>
@endsection