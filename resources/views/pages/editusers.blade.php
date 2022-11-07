@extends('layouts.app')

@section('content')
<div class="form-group" style="width: 50%; margin-left: 11%; padding-bottom: 15px;" id="stations_create_form">
<h2>EDIT</h2>
{!! Form::open(['action' => ['App\Http\Controllers\UsersController@update', $user->member_id], 'method' => 'PUT']) !!}
    <div class="form-group" style="padding-bottom: 15px;">
        {{Form::label('FirstName', 'First Name')}}
        {{Form::text('FirstName', $user->FirstName, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
    </div>
    <div class="form-group" style="padding-bottom: 15px;">
        {{Form::label('LastName', 'Last Name')}}
        {{Form::text('LastName', $user->LastName, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
    </div>
    <div class="form-group" style="padding-bottom: 15px;">
        {{Form::label('Organization', 'Organization')}}
        {{Form::text('Organization', $user->Organization, ['class' => 'form-control', 'placeholder' => 'Organization'])}}
    </div>
    <!--{{Form::hidden('_method', 'PUT')}}-->
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection