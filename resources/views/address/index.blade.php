@extends('address/address')
@section('content')
<div class="row">
    <div class="col-8"><br>
        <div class="card">
            <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th>ADDRESS</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $data)
                                    <tr class="text-center">
                                        <td>{{ $data->address}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>     
        </div>
            <div class="card-footer">
                <a href="{{ URL::to('order') }}" class="btn btn-outline-dark">Back</a>
            </div>
    </div>
</div>
@endsection