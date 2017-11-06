@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <h1>Users</h1>

    <div class="users">
        @foreach($users as $user)
            <div class="user">
                <a href="users/{{$user->id}}">
                    <img src="{{$user->avatar}}" alt="{{$user->name}}">
                    <p>{{$user->name}}</p>
                </a>
            </div>
        @endforeach
    </div>

    <form action="users" method="get">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <button>Search</button>
    </form>
@endsection