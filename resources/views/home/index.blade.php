@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome, {{$user->name}}</h1>
@endsection