@extends('product/product')
@section('content')
    <div class="row">
        <div class="col-12">
            {{ Form::open(['route'=>'product.store','files'=>true])}}
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ADD PRODUCT</h3>
                    </div>
                    <div class="card-body">
                        @if(!empty($errors->all()))
                        <div class="alert alert-danger">
                            {{ Html::ul($errors->all())}}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('image1', 'IMAGE 1') }}
                                    {{ Form::file('imageFile', ['class'=>'form-control']) }}        
                                </div>
                                <div class="form-group">
                                    {{ Form::label('image2', 'IMAGE 2') }}
                                    {{ Form::file('imageFile', ['class'=>'form-control']) }}        
                                </div>
                                <div class="form-group">
                                    {{ Form::label('image3', 'IMAGE 3') }}
                                    {{ Form::file('imageFile', ['class'=>'form-control']) }}        
                                </div>
                                <div class="form-group">
                                    {{ Form::label('name_product', 'NAME PRODUCT') }}
                                    {{ Form::text('name_product', '', ['class'=>'form-control', 'placeholder'=>'Input Name of Product']) }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('dimension', 'DIMENSION') }}
                                    {{ Form::text('dimension', '', ['class'=>'form-control', 'placeholder'=>'Input Dimension of Product']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('fabric', 'FABRIC') }}
                                    {{ Form::text('fabric', '', ['class'=>'form-control', 'placeholder'=>'Input Fabric of Product']) }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('finish', 'FINISH') }}
                                    {{ Form::select('finish', ['tabac'=>'Tabac', 'black'=>'Black'], null,
                                        ['class'=>'form-control']) }}        
                                </div>
                                <div class="form-group">
                                    {{ Form::label('price', 'PRICE') }}
                                    {{ Form::text('price', '', ['class'=>'form-control', 'placeholder'=>'Input Price of Product']) }}
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('id_category', 'CATEGORY') }}
                                    {{ Form::text('id_category', '', ['class'=>'form-control', 'placeholder'=>'Input Category of Product']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('code_product', 'CODE') }}
                                    {{ Form::text('code_product', '', ['class'=>'form-control', 'placeholder'=>'Input Code of Product']) }}
                                </div>
                            </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('stock', 'STOCK') }}
                                    {{ Form::text('stock', '', ['class'=>'form-control', 'placeholder'=>'Input Price of Product']) }}
                                </div>
                                <div class="form-group">
                                {{ Form::label('description', 'DESCRIPTION') }}
                                {{ Form::textarea('description', '', ['class'=>'form-control', 'placeholder'=>'Enter Description', 'rows'=>5]) }}
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