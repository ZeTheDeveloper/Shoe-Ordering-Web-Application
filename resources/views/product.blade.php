<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$product['productName']}} - SNKYS</title> <!-- Title of the page -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/color-01.css">
	<link rel="stylesheet" href="/assets/css/productdetail.css">
</head>

<body>
	<x-header />
	<main class="container">
		<br><br>
		<div class="left-column">
			<img src="{{$product['productImage']}}">
		</div>
		<div class="right-column">
			<div class="product-description">
				<h2>{{$product['productName']}}</h2>
				<h3>RM {{$product['productPrice']}}</h3>
				<p>{{$product['productDesc']}}</p>
				<p>Quantity: {{$product['productQty']}}</p>
			</div>

			<div>
				<form action="addToCart/{{$product['id']}}" method="POST">
					@csrf
					<label for="quantity">Amount:</label>
					<select id="quantity" name="quantity">
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4 (Max)</option>
					</select>
					<input type="hidden" id="userEmail" name="userEmail" value="{{session('userEmail')}}">
					<br><br>

					@if(empty(session('user')))
					<a href="/login/showLoginForm" class="cart-btn">Add To Cart</a>
					@else
					<button class="cart-btn" type="submit">Add to Cart</button>
					@endif
				</form>
			</div>
		</div>
		<br><br>
	</main>
	<br><br>
	<x-footer />

	<script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/functions.js"></script>

</body>

</html>