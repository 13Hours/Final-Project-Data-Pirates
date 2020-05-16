<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Transactions</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images2/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor2/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts2/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor2/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor2/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor2/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css2/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css2/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">ID Num</th>
								<th class="column2">Transaction ID</th>
								<th class="column3">Type</th>
								<th class="column4">Amount</th>
								<th class="column5">Date</th>
								
							</tr>
						</thead>
						<tbody>

							@foreach($transactions as $t)
								<tr>
									<td class="column1">{{$t->id_number}}</td>
									<td class="column2">{{$t->transaction_id}}</td>
									<td class="column3">{{$t->type}}</td>
									<td class="column4">{{$t->amount}}</td>
									<td class="column5">{{$t->created_at}}</td>
									
								</tr>

							@endforeach
								
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="{{asset('vendor2/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor2/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor2/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor2/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js2/main.js')}}"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>