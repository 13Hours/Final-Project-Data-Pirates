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
table, th, td {
  border: 1px solid black;
  color: black;
}

    label {
color: black;
}

</style>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" >
	  
	  
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
	  <div align="center"  class="login">
	  	<h3>View Account</h3>
	  	<br>
	  	<div>
	  	<table >
	  		<tr>
	  			<th>ID Number</th>
	  			<th>First Name</th>
	  			<th>Last Name</th>
	  			<th>Gender</th>
	  			<th>E-mail</th>
	  			<th>Faculty</th>
	  			<th>Department</th>
	  			<th>Student Status</th>
	  			<th>Current Year</th>
	  		</tr>
	  		<tr>
	  			<td>{{$student->id_number}}</td>
	  			<td>{{$student->fname}}</td>
	  			<td>{{$student->lname}}</td>
	  			<td>{{$student->gender}}</td>
	  			<td>{{$student->email}}</td>
	  			<td>{{$student->faculty}}</td>
	  			<td>{{$student->department}}</td>
	  			<td>{{$student->student_status}}</td>
	  			<td>{{$student->current_year}}</td>
	  		</tr>
	  	</table>

	  </div>



	  	<br><br>

	  	<a href="{{route('view_transactions')}}">View Transactions</a>
	  </div>






	</body>
</html>