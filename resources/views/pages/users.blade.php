@extends('layouts.app')

@section('content')
    @if(count($users) > 0)
        @foreach($users as $user)
            <!--<div class="well">-->
                <!--<h3><a href="/users/{{$user->member_id}}">{{$user->member_id}}</a></h3>-->
                <!--/////////////////////////////////////////////////////////-->
                <!--<h3><a href="/users/{{$user->member_id}}/edit">{{$user->member_id}}</a></h3>-->
                <!--<button><a href="/users/{{$user->member_id}}/edit">{{$user->member_id}}</a></button>-->
            <!--</div>-->
        @endforeach
    @else
        <p>No data found</p>
    @endif

    <div class="main_content_with_buttons">
    <div class="add_edit_buttons">
        <a class="add_station_button" href="users/create">ADD USER</a>
        <!--<a class="edit_button" href="#">EDIT</a>-->
    </div>
    <div class="main_content_tables">

        <table id="user_first_name">
            <tr>
                <th><div>FIRST NAME</div></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td>{{$user->FirstName}}</td>
            </tr>
                @endforeach
        </table>
        <table id="user_last_name">
            <tr>
                <th><div>LAST NAME</div></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td>{{$user->LastName}}</td>
            </tr>
                @endforeach
        </table>
        <table id="user_organization">
            <tr>
                <th><div>ORGANIZATION</div></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td>{{$user->Organization}}</td>
            </tr>
                @endforeach
        </table>
        <table id="user_email">
            <tr>
                <th><div>EMAIL</div></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td>{{$user->emailaddress}}</td>
            </tr>
                @endforeach
        </table>
        <table>
            <tr>
                <th><div>ACTIONS</div></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td><a href="/users/{{$user->member_id}}/edit" class="btn btn-primary btn-sm">EDIT</a></td>
            </tr>
                @endforeach
        </table>

        </div>
            <!--used to be yield content here)-->
        </main>
    </div>

    {{ $users->links() }}

@endsection
