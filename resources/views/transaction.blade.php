<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Transaction</title>
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

	<div align="center" class="login">
	@if(Session::has('error'))
		<div class="text-center">
			<span class="alert-danger">{{Session::get('error')}}</span>
		</div>
	@endif

	@if(Session::has('msg'))
		<div class="text-center">
			<span class="alert-success">{{Session::get('msg')}}</span>
		</div>
	@endif


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="{{route('add_trans')}}" method="post" class="contact100-form validate-form">
				@csrf
				<span class="contact100-form-title">
					Transaction Simulation
				</span>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Barcode</span>
					<input class="input100" type="text" name="barcode" placeholder="Bar code" readonly id="barcode">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Amount</span>
					<input class="input100" type="number" name="amount" step="0.01" placeholder="Amount" >
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input">
					<span class="label-input100">Item</span><br>
				    	<select name="item">
							<option value="book">Book</option>
						</select><br>
				    	<span class="focus-input100"></span>
				</div>

				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Pay
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script type="text/javascript">

		var id = '';

		//disable the enter key event
		$(document).keypress(
		  function(event){
		    if (event.which == '13') {
		      event.preventDefault();
		    }
		});

		//add key event listeners
		document.addEventListener('keydown', function(event){
			var num = $('#barcode').val();
			if(num.length == 9)
				return;
			if((event.keyCode >= 48 && event.keyCode <= 57))
				id+=event.key;
			if (event.which == '13') {
		    	return;
		    }
			$('#barcode').val(id);
		});
	</script>



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
