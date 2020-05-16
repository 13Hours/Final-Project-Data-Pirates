@extends('enter')

@section('title','Page Title')

@section('content')
    @parent

    
    <div align="center" class="login">
        <h2>LOGIN FORM</h2>

        
        <form action="" method="post" class="login1">
        	@csrf

        	<label>ID Number</label>
        	<input type="number" name="id_num" ><br><br>


        	<label>Password</label>
        	<input type="text" name="pwd"><br><br><br>

        	<input type="submit" name="submit">

        </form>



        <br><br>

        <a href="{{route('create_account')}}"> Create Account</a>

    </div>


    @endsection

