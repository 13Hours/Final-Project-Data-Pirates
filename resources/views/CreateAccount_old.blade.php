<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UWIPay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style>
    label {
    color: black;
    }
    p{
        color: black;
        font-weight: bold;
    }
  </style>

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="main.html">UWIPay</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="main.html#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="main.html#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="main.html#checkbalance-section" class="nav-link"><span>Check Balance</span></a></li>
	          <li class="nav-item"><a href="main.html#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="main.html#privacy-section" class="nav-link"><span>Privacy Setings</span></a></li>
	          <!--<li class="nav-item"><a href="#accInfo-section" class="nav-link"><span>Account Info</span></a></li>-->
	          <li class="nav-item"><a href="main.html#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	  <br><br><br>

	  <div align="center" class="login">
	  	<h3>Account Creation Form</h3>
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
    	<input type="text" name="email" placeholder="JohnSmith@my.uwi.edu"><br>

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
	  	
	  </div>

	</body>
</html>