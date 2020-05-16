<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <style>
    label {
color: black;
}

body {
 background-image: url(images/bg1.jpg);
 background-repeat: no-repeat;
 background-position: center;
 background-size: cover;
 height: 500px;
 background-color: #cccccc;
}

input[type=submit]{
  background-color: #007bff;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 25%;
}

  </style>

</head>
<body>
	<div class="container">
        @yield('content')
    </div>

    <script
 		src="https://code.jquery.com/jquery-3.4.1.min.js"
  		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  		crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    @stack('js')
</body>
</html>