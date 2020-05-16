<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Account</title>
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
								<th class="column1">ID Number</th>
								<th class="column2">First Name</th>
								<th class="column3">Last Name</th>
								<th class="column4">Gender</th>
								<th class="column5">E-Mail</th>
								<th class="column6">Faculty</th>
								<th class="column7">Department</th>
								<th class="column8">Student Status</th>
								<th class="column9">Current Year</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">{{$student->id_number}}</td>
									<td class="column2">{{$student->fname}}</td>
									<td class="column3">{{$student->lname}}</td>
									<td class="column4">{{$student->gender}}</td>
									<td class="column5">{{$student->email}}</td>
									<td class="column6">{{$student->faculty}}</td>
									<td class="column7">{{$student->department}}</td>
									<td class="column8">{{$student->student_status}}</td>
									<td class="column9">{{$student->current_year}}</td>
								</tr>
								
								
						</tbody>
					</table>
				</div>
				<br><br>
				<div align="center">
	  				<a href="{{route('view_transactions')}}">View Transactions</a>
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

</body>
</html>