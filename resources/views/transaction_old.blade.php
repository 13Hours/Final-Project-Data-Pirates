<!DOCTYPE html>
<html>
<head>
	<title>Add Transaction</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<style>
    label {
color: black;
}
  </style>
  
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

	<h3>Transaction Simulation</h3>

	<div>
		<form action="{{route('add_trans')}}" method="post">
			@csrf
			<input type="text" name="barcode" placeholder="Bar code" readonly id="barcode"><br>
			<input type="number" name="amount" step="0.01" placeholder="Amount"><br>
			<select name="item">
				<option value="book">Book</option>
			</select><br>
			<button type="submit">Pay</button>
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

</body>
</html>