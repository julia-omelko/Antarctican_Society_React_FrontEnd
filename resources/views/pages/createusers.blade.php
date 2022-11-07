@extends('layouts.app')

@section('content')
<div class="form-group" style="width: 50%; margin-left: 11%; padding-bottom: 15px;" id="users_create_form">
<h2>CREATE</h2>
{!! Form::open(['action' => 'App\Http\Controllers\UsersController@store', 'method' => 'POST']) !!}
    <div class="form-group" style="padding-bottom: 15px;">
        {{Form::label('FirstName', 'First Name')}}
        {{Form::text('FirstName', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
    </div>
    <div class="form-group" style="padding-bottom: 15px;">
        {{Form::label('LastName', 'Last Name')}}
        {{Form::text('LastName', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
    </div>
    <div class="form-group" style="padding-bottom: 15px;">
        {{Form::label('Organization', 'Organization')}}
        {{Form::text('Organization', '', ['class' => 'form-control', 'placeholder' => 'Organization'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection