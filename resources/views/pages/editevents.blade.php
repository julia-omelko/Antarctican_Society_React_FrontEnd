@extends('layouts.app')

@section('content')
<div class="form-group" style="width: 50%; margin-left: 11%; padding-bottom: 15px;" id="stations_create_form">
<h2>EDIT</h2>
{!! Form::open(['action' => ['App\Http\Controllers\EventsController@update', $event->Event_ID], 'method' => 'PUT']) !!}
    <div class="form-group" style="padding-bottom: 15px;">
        {{Form::label('Event_Name', 'Event Name')}}
        {{Form::text('Event_Name', $event->Event_Name, ['class' => 'form-control', 'placeholder' => 'Event Name'])}}
    </div>
    <div class="form-group" style="padding-bottom: 15px;">
        {{Form::label('Start_Date', 'Start Date')}}
        {{Form::text('Start_Date', $event->Start_Date, ['class' => 'form-control', 'placeholder' => 'Start Date'])}}
    </div>
    <div class="form-group" style="padding-bottom: 15px;">
        {{Form::label('End_Date', 'End Date')}}
        {{Form::text('End_Date', $event->End_Date, ['class' => 'form-control', 'placeholder' => 'End Date'])}}
    </div>
    <!--{{Form::hidden('_method', 'PUT')}}-->
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection