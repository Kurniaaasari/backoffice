@extends('wishlist/wishlist')
@section('content')

<style> 
.table{
                    width: 100%;
                    margin-top: 20px;
                    border-collapse: collapse;
                }
                .table th, .table td{
                    border: 1px solid #696969;
                    padding: 10px;
                    /* font-family: arial; */
                    color: #000000;
                }
                .table th{
                    font-size: 14px;
                    background: #778899;
                }
                .table td{
                    background: #F8F8FF;
                    padding: 10px 10px;
                    font-size: 15px;
                }
               

                </style>
<div class="row">
    <div class="col-20">
        <div class="card1">
            <div class="card-header">
            <div>
            </div>
                <div class="card-tools">
             </div>
         </div>
         <div class="card-body">
            @if (Session::has('message'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="row1">
                <div class="col-md-20">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>NAME</th>
                                <th>PRODUCT</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($data as $row)
                            <tr>
                                <td>{{ $row->id_wishlist}}</td>
                                <td>{{ $row->name}}</td>
                                <td>{{ $row->name_product}}</td>
                                
                                <!-- <td class="text-center">
                                    <form method="POST" action="{{ URL::to('/address/'.$address['id_address']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <div class="btn-group">
                                             <a class="btn btn-info" href="{{ URL::to('/customer/show'.$customer['id_customer']) }}"><i class="fa fa-eye"></i></a> -->
                                            <!-- <a class="btn btn-success" href="{{ URL::to('/address/'.$address['id_address'].'/edit') }}"><i class="fa fa-pencil"></i></a>

                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </form>
                                </td> --> 
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection