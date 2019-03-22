@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-100%">
            <div class="card">
                <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>


                    @endif
                        <div class="row justify-content-center">
                    You are logged in!
                        </div>


                </div>

                <table border="2"   width="100%">
                    <thead align="center" >
                    <tr>

                        <th>Name</th>
                        <th>User Type</th>
                        <th>User Location</th>
                        @if(Auth::user()->user_type=='Admin')
                        <th>Edit</th>
                        <th>Delete</th>
                        @endif

                    </tr>
                    </thead>

                @foreach($users as $user)
                        <tr align="center">
                            <td>
                                {{$user->first_name}} {{$user->last_name}}
                            </td>

                            <td>
                                {{$user->user_type}}
                            </td>
                            <td>
                                {{$user->user_location}}
                            </td>
                            @if(Auth::user()->user_type=='Admin' &&( $user->user_type=='Default User'||Auth::user()->id ==$user->id ))
                            <td>
                                <a href="users/{{$user->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
                            </td>
                            <td>


                                <!-- Bootstrap code/Modal Window -->

                                <button type="button" class="btn btn-danger btn-submit" data-toggle="modal" data-target="#myModal{{$user->id}}">Delete</button>

                                <!-- Modal content-->

                                <div id="myModal{{$user->id}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">


                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"> </h4>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Are you sure you want to delete this user ?</h5>

                                            </div>
                                            <div class="modal-footer">
                                                {!! Form::open(['action'=> ['FunctionController@destroy',$user->id], 'method' =>'POST', 'class' => 'pull-right']) !!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Yes', ['class'=> 'btn btn-primary'])}}
                                                {!! Form::close() !!}
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </td>
                                @endif
                        </tr>



                    @endforeach


                    @if(Auth::user()->user_type=='Admin')
                    <div class="row justify-content-center">
                        <a href="/users/create" class="btn btn-primary">Add New User</a>
                    </div>
                        @endif

                </table>

                </div>
            </div>
        </div>
    </div>






@endsection
