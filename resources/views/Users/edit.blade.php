@extends('layouts.app')

@section ('content')

    @if(Auth::user()->user_type=='Admin' &&( $user->user_type=='Default User'||Auth::user()->id ==$user->id ))

        <h1> Edit User  </h1>

    {!! Form::open(['action' => ['FunctionController@update',$user->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('first_name','First Name:')}}
        {{Form::text('first_name',$user->first_name,['class'=> 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('last_name','Last Name:')}}
        {{Form::text('last_name',$user->last_name,['class'=> 'form-control'])}}
    </div>


    {{Form::label('user_type','Pick Access Level: ')}}
    {{ Form::select('user_type',[
                              $user->user_type=>$user->user_type,'Access Levels:'=>['Admin'=>'Admin','Default User'=>'Default User'],
                             ],'default',['name'=>'user_type'])
                             }}


    {{Form::label('user_location','Pick Your Location(optional): ')}}
    {{ Form::select('user_location',[
                              $user->user_location=> $user->user_location,'Available towns:'=>['Mostar'=>'Mostar','London'=>'London','Berlin'=>'Berlin','Zagreb'=>'Zagreb','Split'=>'Split'],
                             ],'default',['name'=>'user_location'])
                             }}
    <br>
    <br>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-success'])}} <br> <br>

     <a href="/home"><button type="button"class="btn btn-success">Go Back</button></a>


    {!! Form::close() !!}


    @else

         <h1>You are not authorized to access this page !</h1>
         <a href="/home"><button type="button"class="btn btn-success">Go Back</button></a>
    @endif

@endsection