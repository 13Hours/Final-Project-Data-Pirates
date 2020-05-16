@extends('home')

@section('title', 'Page Title')

@section('content')
    @parent

    
    <a href="{{route('welcome_route')}}">welcome</a>
    <br>
    <a href="{{route('signup_route')}}">signup</a>

    
@endsection