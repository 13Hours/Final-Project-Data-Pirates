@extends('add_credit_form')

@section('title','Page Title')

@section('content')
    @parent

    <h1>Add Credit</h1>

    <form action="{{route('add_credit')}}" method="post">
    	@csrf

    	<label>ID Number</label>
    	<input type="number" name="id"><br>

    	<label>Add Credit Amount</label>
    	<input type="number" name="credit" step="0.01"><br>

    	<input type="submit" name="submit">

    </form>

    
    @if(Session::has('msg'))
    <!-- show popup here -->
        <span class="alert-success">{{Session::get('msg')}}</span>
    @endif


    @endsection