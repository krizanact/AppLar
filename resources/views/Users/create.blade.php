@extends('layouts.app')

@section ('content')

    @if(Auth::user()->user_type=='Admin')

    <h1>Add New User</h1>

    {!! Form::open(['action' => 'FunctionController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('first_name','First Name:')}}
        {{Form::text('first_name','',['class'=> 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('last_name','Last Name:')}}
        {{Form::text('last_name','',['class'=> 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('username','Username:')}}
        {{Form::text('username','',['class'=> 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('password','Password:')}}
        {!! Form::password('password', array('class'=>'form-control')) !!}
    </div>
    {{ Form::label('user_type','Pick Access Level: ')}}
    {{ Form::select('User_Type',[
                              null=>'Select User Access Level ','Access Levels:'=>['Admin'=>'Admin','Default User'=>'Default User'],
                             ],'default',['name'=>'user_type'])
                             }}

    {{ Form::label('user_location','Pick Your Location(optional): ')}}
    {{ Form::select('User_Location',[
                              null=>'Select User Location ','Available towns:'=>['Mostar'=>'Mostar','London'=>'London','Berlin'=>'Berlin','Zagreb'=>'Zagreb','Split'=>'Split'],
                             ],'default',['name'=>'user_location'])
                             }}
    <br>
    <br>
    {{Form::submit('Submit',['class'=>'btn btn-success'])}} <br><br>
    <a href="/home"><button type="button"class="btn btn-success">Go Back</button></a>



    {!! Form::close() !!}

    @else

        <h1>You are not authorized to access this page !</h1>
        <a href="/home"><button type="button"class="btn btn-success">Go Back</button></a>
    @endif

@endsection