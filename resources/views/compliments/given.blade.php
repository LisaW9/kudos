@extends('layouts.app')

@section('title', 'Given compliments')

@section('content')
    <h1>Given compliments</h1>
    <ul>
        @forelse($user->complimentsGiven as $compliment)
            <li>To: <a href="{{$compliment->getReceiver->id}}">{{ $compliment->getReceiver->name }}</a>
                - {{$compliment->compliment}}</li>
        @empty
            <p>You haven't given any compliments yet >:(</p>
        @endforelse
    </ul>


@endsection