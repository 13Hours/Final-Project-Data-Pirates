@extends('view_account')

@section('title','Page Title')

@section('content')
    @parent

    <h1>LOGIN FORM</h1>

    <form action="{{route('')}}" method="post">
    	@csrf

    	<label>ID Number</label>
    	<input type="number" name="id"><br>

    	<input type="submit" name="submit">

    </form>


    @endsection