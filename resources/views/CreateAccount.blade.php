<!DOCTYPE html>
<html lang="en">
<head>
	<title>Account Creation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images1/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor1/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts1/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor1/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor1/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor1/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor1/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor1/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css1/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css1/main.css')}}">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="{{route('create_student')}}" method="post" class="contact100-form validate-form">
				@csrf
				<span class="contact100-form-title">
					Account Creation Form
				</span>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">First Name</span>
					<input class="input100" type="text" name="FName" placeholder="John">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Last Name</span>
					<input class="input100" type="text" name="LName" placeholder="Smith">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">ID Number</span>
					<input class="input100" type="number" name="IDNum" placeholder="000000000" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Gender</span><br>
				    	<input type="radio" name="Gender" id="male" value="male">
				    	<label for="male">Male</label><br>
				    	<input type="radio" name="Gender" id="female" value="female">
				    	<label for="female">Female</label><br>
				    	<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">E-Mail</span>
					<input class="input100" type="text" name="email" placeholder="JohnSmith@my.uwi.edu">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Faculty</span><br>
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
				    	<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Department</span>
					<input class="input100" type="text" name="Department" placeholder="Computing and Information Technology">
					<span class="focus-input100"></span>
				</div>

				<div "wrap-input100 validate-input">
					<span class="label-input100">Student Status</span><br>
				    	<input type="radio" name="Status" id="Full_Time" value="Full_Time">
				    	<label for="Full_Time">Full Time</label><br>
				    	<input type="radio" name="Status" id="Part_Time" value="Part_Time">
				    	<label for="Part_Time">Part Time</label><br>
				    	<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Current Year</span>
					<input class="input100" type="text" name="CurYear" placeholder="1" min="1">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Password</span>
					<input class="input100" type="text" name="pwd" >
					<span class="focus-input100"></span>
				</div>

				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>




	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('vendor1/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor1/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor1/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor1/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor1/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor1/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor1/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js1/main.js')}}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
