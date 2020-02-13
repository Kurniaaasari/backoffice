@extends('detail/detail')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DETAIL ORDER</h3>
            </div>
            <div class="card-body">
                        <div class="row invoice-info">
                        <div class="col-8">
                            <b>Order ID&emsp;&emsp;&ensp; :</b> {{ $customer->id_order}} <br>
                            <b>Name&emsp;&emsp;&emsp;&ensp; :</b> {{ $customer->name}} <br>
                            <b>Address&emsp;&emsp;&ensp; :</b> {{ $customer->address}} <br>
                            <b>No.Phone &emsp;&ensp; :</b> {{ $customer->no_phone}} <br>
                            <b>Email&emsp;&emsp;&emsp;&ensp; :</b> {{ $customer->email}} <br>
                            <b>Order Status&ensp; :</b>
                            {{ Form::select('status', ['New'=>'New','Shipped'=>'Shipped','Delivered'=>'Delivered'], null, ['class'=>'form-control']) }}<br>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr class="text-center">
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($detail as $detail)
                                    <tr class="text-center">
                                        <td>{{ $detail->name_product}}<br>{{ $detail->material}}<br>{{ $detail->finish}}</td>
                                        <td>$ {{ $detail->price}}</td>
                                        <td>{{ $detail->quantity}}</td>
                                        <td>$ {{ $detail->price * $detail->quantity}}</td>
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
                {{ Form::submit('Save', ['class' => 'btn btn-secondary pull-right']) }}
            </div>
    </div>
</div>
@endsection