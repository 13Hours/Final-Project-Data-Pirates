@extends('account_create_form')

@section('title','Page Title')

@section('content')
    @parent

    @if($errors->any())
    	<div class="alert alert-danger">{{$errors->first('Department')}}</div>
    @endif

    <h1>Account Creation Form</h1>
    <form action="{{route('create_student')}}" method="post">
    	@csrf

    	<label>First Name</label>
    	<input type="text" name="FName" placeholder="John"><br>

    	<label>Surname</label>
    	<input type="text" name="LName" placeholder="Smith"><br>

    	<label>IDNumber</label>
    	<input type="number" name="IDNum" placeholder="000000000" ><br>

    	<p>Gender</p>
    	<input type="radio" name="Gender" id="male" value="male">
    	<label for="male">Male</label><br>
    	<input type="radio" name="Gender" id="female" value="female">
    	<label for="female">Female</label><br>
    	<br>

    	<label>Email</label>
    	<input type="text" name="E-mail" placeholder="JohnSmith@my.uwi.edu"><br>

    	<p>Faculty</p>
    	<input type="radio" name="Faculty" id="Engineering" value="Engineering">
    	<label for="Engineering">Faculty of Engineering</label><br>
    	<input type="radio" name="Faculty" id="Food_and_Agriculture" value="Food_and_Agriculture">
    	<label for="Food_and_Agriculture">Faculty of Food and Agriculture</label><br>
    	<input type="radio" name="Faculty" id="Humanities_and_Education" value="Humanities_and_Education">
    	<label for="Humanities_and_Education">Faculty of Humanities and Education</label><br>
    	<input type="radio" name="Faculty" id="Medical_Sciences" value="Medical_Sciences">
    	<label for="Medical_Sciences">Faculty of Medical Sciences</label><br>
    	<input type="radio" name="Faculty" id="Science_and_Technology" value="Science_and_Technology">
    	<label for="Science_and_Technology">Faculty of Science and Technology</label><br>
    	<input type="radio" name="Faculty" id="Social_Sciences" value="Social_Sciences">
    	<label for="Social_Sciences">Faculty of Social Sciences</label><br>
    	<input type="radio" name="Faculty" id="Sport" value="Sport">
    	<label for="Sport">Faculty of Sport</label><br>
    	<br>

    	<label>Department</label>
    	<input type="text" name="Department" placeholder="Computing and Information Technology"><br>

    	<p>Student Status</p>
    	<input type="radio" name="Status" id="Full_Time" value="Full_Time">
    	<label for="Full_Time">Full Time</label><br>
    	<input type="radio" name="Status" id="Part_Time" value="Part_Time">
    	<label for="Part_Time">Part Time</label><br>
    	<br>

    	<label>Current Year</label>
    	<input type="number" name="CurYear" placeholder="1" min="1"><br>

        <label>Password</label>
        <input type="text" name="pwd" ><br>

    	<input type="submit" name="submit">
    	
    </form>







    @endsection