@extends('users/users')
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
         
<!-- <div class="row"> -->
    <div class="col-12 table-responsive">
            <div class="container">
                <form class="form-inline md-2 float-right" method="POST" action="{{url('users/search')}}" role="search">
                    <div class="input-group input-group-sm">
                    {{ csrf_field() }}
                      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search" value="{{isset($query)?$query:""}}">
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
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>NO</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @if(isset($users))
                            <?php $no = 0 ;?>
                            @foreach($users as $users)
                            <?php $no++ ;?>
                            <tr>
                            <td>{{ $no }}</td>
                            <!-- <td class="text-center">{{ $users['id_users'] }}</td> -->
                                <td>{{ $users['name'] }}</td>
                                <td>{{ $users['email'] }}</td>
                                <td>{{ $users['password'] }}</td>
                                <td class="text-center">
                                    <form method="POST" action="{{ URL::to('/users/'.$users['id_users']) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <div class="btn-group">
                                            <!-- <a class="btn btn-info" href="{{ URL::to('/users/show'.$users['id_users']) }}"><i class="fa fa-eye"></i></a> -->

                                            <a class="btn btn-success" href="{{ URL::to('/users/'.$users['id_users'].'/edit') }}"><i class="fa fa-pencil"></i></a>

                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </form>
                                </td>
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