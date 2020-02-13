@extends('payment/payment')
@section('content')

<style> 
.table{
                    width: 100%;
                    margin-top: 10px;
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
<!-- <div class="row"> -->
    <div class="col-20">
        <div class="card1">
            <div class="card-header">
            <div class="container">
                <form class="form-inline md-2 float-right" method="POST" action="{{url('payment/search')}}" role="search">
                    <div class="input-group input-group-sm">
                    {{ csrf_field() }}
                      <input class="form-control mr-sm-2" type="text" name="q" placeholder="" aria-label="Search" value="{{isset($query)?$query:""}}">
                        <span class="input-group-btn">
                            <button class="btn btn-navbar"><input type="submit" value="Search">
                            </button>
                        </span>
                    </div>
                </form>
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
                    <table class="table">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>NO</th>
                                <th>DATE ORDER</th>
                                <th>TOTAL PAYMENT</th>
                                <th>DATE PAYMENT</th>
                                <th>PAYMENT CONFIRM</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(isset($data))
                            <?php $no = 0 ;?>
                            @foreach($data as $row)
                            <?php $no++ ;?>
                            <tr>
                            <td class="text-center">{{ $no }}</td>
                                <td>{{ $row->date_order}}</td>
                                <td>$ {{ $row->total_payment}}</td>
                                <td>{{ $row->created_at}}</td>
                                <td>{{ $row->payment_confirm}}</td>
                            </tr>
                            @endforeach
                            @else
                             <tr>
                                 <td colspan="5">
                                     {{$message}} 
                                 </td>
                             </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection