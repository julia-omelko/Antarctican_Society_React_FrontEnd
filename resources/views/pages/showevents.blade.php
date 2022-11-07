@extends('layouts.app')

@section('content')
<h1>{{$event->Event_Name}}</h1>

<a href="/events/{{$event->Event_ID}}/edit">EDIT</a>

{!!Form::open(['action' => ['App\Http\Controllers\EventsController@destroy', $event->Event_ID], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

@endsection