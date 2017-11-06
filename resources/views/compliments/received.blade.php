@extends('layouts.app')

@section('title', 'Received compliments')

@section('content')
    <h1>Received compliments</h1>
    <ul>
        @forelse($user->complimentsReceived as $compliment)
            <li><a href="{{$compliment->getGiver->id}}">{{ $compliment->getGiver->name }}</a>
                - {{$compliment->compliment}}</li>
        @empty
            <p>You haven't received any compliments yet :(</p>
        @endforelse
    </ul>
@endsection