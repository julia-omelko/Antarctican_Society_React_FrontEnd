@extends('layouts.app')

@section('content')
    <!--@if(count($events) > 0)-->
        <!--@foreach($events as $event)-->
            <!--<div class="well">-->
                <!--<h3><a href="/users/{{$event->Event_ID}}">{{$event->Event_ID}}</a></h3>-->
                <!--/////////////////////////////////////////////////////////-->
                <!--<h3><a href="/users/{{$event->Event_ID}}/edit">{{$event->Event_ID}}</a></h3>-->
                <!--<button><a href="/users/{{$event->Event_ID}}/edit">{{$event->Event_ID}}</a></button>-->
            <!--</div>-->
        <!--@endforeach
    @else-->
        <!--<p>No data found</p>
    @endif-->

    <div class="main_content_with_buttons" style="overflow: hidden;">
    <div class="add_edit_buttons">
        <a class="add_station_button" href="events/create">ADD EVENT</a>
        <!--<a class="edit_button" href="#">EDIT</a>-->
    </div>
    <div id="events_table" class="main_content_tables" style="overflow: hidden;">

        <table id="event_name">
            <tr>
                <th><div>EVENT NAME</div></th>
            </tr>
                @foreach($events as $event)
            <tr>
                <td>{{$event->Event_Name}}</td>
            </tr>
                @endforeach
        </table>
        <table id="event_start_date">
            <tr>
                <th><div>START DATE</div></th>
            </tr>
                @foreach($events as $event)
            <tr>
                <td>{{$event->Start_Date}}</td>
            </tr>
                @endforeach
        </table>
        <table id="event_end_date">
            <tr>
                <th><div>END DATE</div></th>
            </tr>
                @foreach($events as $event)
            <tr>
                <td>{{$event->End_Date}}</td>
            </tr>
                @endforeach
        </table>
        <table id="event_actions">
            <tr>
                <th><div>ACTIONS</div></th>
            </tr>
                @foreach($events as $event)
            <tr>
                <td><a href="/events/{{$event->Event_ID}}/edit" class="btn btn-primary btn-sm">EDIT</a></td>
            </tr>
                @endforeach
        </table>

        </div>
            <!--used to be yield content here)-->
        </main>
    </div>

    {{ $events->links() }}

@endsection
