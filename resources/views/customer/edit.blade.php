@extends('customer/customer')
@section('content')
<div class="row">

    <div class="col-12">
        {{ Form::model($customer,['route'=>['customer.update',$customer['id_customer']], 'files'=>true,'method'=>'PUT']) }}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">CHANGE CUSTOMER DETAIL</h3>
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
                        {{ Form::label('name', 'NAME') }}
                        {{ Form::text('name', $customer['name'], ['class'=>'form-control', 'placeholder'=>'Input Name']) }}      
                        </div>
                        <div class="form-group">
                        {{ Form::label('address', 'ADDRESS') }}
                        {{ Form::text('address', $customer['address'], ['class'=>'form-control', 'placeholder'=>'Input Address']) }}   
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('no_phone', 'PHONE NUMBER') }}
                        {{ Form::text('no_phone', $customer['no_phone'], ['class'=>'form-control', 'placeholder'=>'Input Phone Number']) }}      
                        </div>
                        <div class="form-group">
                        {{ Form::label('email', 'EMAIL') }}
                        {{ Form::text('email', $customer['email'], ['class'=>'form-control', 'placeholder'=>'Input Email']) }}   
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('password', 'PASSWORD') }}
                        {{ Form::text('password', $customer['password'], ['class'=>'form-control', 'placeholder'=>'Input Password']) }}      
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="card-footer">
                <a href="{{ URL::to('customer') }}" class="btn btn-outline-info">Back</a>
                {{ Form::submit('Save', ['class' => 'btn btn-secondary pull-right']) }}
            </div>
        </div>
        <!-- </form> -->
        {{ Form::close() }}
    </div>
</div>
@endsection