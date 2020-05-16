<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Credit</title>
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
			<form action="{{route('add_credit')}}" method="post" class="contact100-form validate-form">
				@csrf
				<span class="contact100-form-title">
					Add Credit
				</span>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">ID Number</span>
					<input class="input100" type="number" name="id" placeholder="Enter your ID Number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Add Credit Amount</span>
					<input class="input100" type="number" name="credit" placeholder="Enter your Amount" step="0.01">
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
			@if(Session::has('msg'))
		    <!-- show popup here -->
		        <span class="alert-success">{{Session::get('msg')}}</span>
		    @endif
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
	<script src="{{asset('vendor1/select2/select2.min.js')}}"></script>
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
