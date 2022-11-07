@extends('layouts.app')

@section('content')
<h1>{{$user->FirstName}}</h1>

<a href="/stations/{{$user->member_id}}/edit">EDIT</a>

{!!Form::open(['action' => ['App\Http\Controllers\UsersController@destroy', $user->member_id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

@endsection
