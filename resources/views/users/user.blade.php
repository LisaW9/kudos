@extends('layouts.app')

@section('title', $user->name)

@section('content')
    @parent
    <h1>{{$user->name}}</h1>
    <h2>Received compliments</h2>
    <ul>
        @foreach($user->complimentsReceived as $compliment)
            <li><a href="{{$compliment->getGiver->id}}">{{ $compliment->getGiver->name }}</a> - {{ $compliment->compliment }}</li>
        @endforeach
    </ul>

    <form action="/compliments" method="post">
        {{ csrf_field() }}
        <label for="compliment">Compliment</label>
        <input type="text" name="compliment" id="compliment">
        <input type="hidden" name="receiver" value="{{ $user->id }}">
        <button>make {{$user->name}}'s day</button>
    </form>

@endsection