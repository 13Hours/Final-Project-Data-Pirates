<!DOCTYPE html>
<html>
<head>
	<title>View transactions</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<style>
table, th, td {
  border: 1px solid black;
  color: black;
}
<style>
    label {
color: black;
}
  </style>
</style>

</head>
<body >

	<div align="center" class="login">
	<table>
		<tr>
			<th>ID Num</th>
			<th>Transaction ID</th>
			<th>Type</th>
			<th>Amount</th>
			<th>Date</th>
		</tr>

		@foreach($transactions as $t)
			<tr>
				<td>{{$t->id_number}}</td>
				<td>{{$t->transaction_id}}</td>
				<td>{{$t->type}}</td>
				<td>{{$t->amount}}</td>
				<td>{{$t->created_at}}</td>
			</tr>
		@endforeach


	</table>

	</div>
	

</body>
</html>