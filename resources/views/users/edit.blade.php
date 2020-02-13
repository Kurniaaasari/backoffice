@extends('users/users')
@section('content')
<div class="row">

    <div class="col-12">
        {{ Form::model($users,['route'=>['users.update',$users['id_users']], 'files'=>true,'method'=>'PUT']) }}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">CHANGE ADMIN DETAIL</h3>
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
                        {{ Form::text('name', $users['name'], ['class'=>'form-control', 'placeholder'=>'Input Name']) }}      
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('email', 'EMAIL') }}
                        {{ Form::text('email', $users['email'], ['class'=>'form-control', 'placeholder'=>'Input Email']) }}   
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        {{ Form::label('password', 'PASSWORD') }}
                        {{ Form::text('password', $users['password'], ['class'=>'form-control', 'placeholder'=>'Input Password']) }}      
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="card-footer">
                <a href="{{ URL::to('users') }}" class="btn btn-outline-info">Back</a>
                {{ Form::submit('Save', ['class' => 'btn btn-secondary pull-right']) }}
            </div>
        </div>
        <!-- </form> -->
        {{ Form::close() }}
    </div>
</div>
@endsection