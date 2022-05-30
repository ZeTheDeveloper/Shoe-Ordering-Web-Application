<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products - SNKYS</title>
    <meta charset="utf-8">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5499/5499206.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color-01.css">
    <link rel="stylesheet" type="text/css" href="assets/css/allproducts.css">
</head>

<body>
    <x-header />
    <main id="main">
        <div class="container">
            <div>
                <h2>All Products</h2>
            </div>
            <div class="row">
                @foreach($product as $product)
                <div class="col" id="product-clicking" onclick="location.href='/product/{{$product["id"]}}';">
                    <div class="product-image-container">
                        <img class="product-image" src="{{$product['productImage']}}">
                    </div>
                    <div class="product-title-container">
                        <h2>{{$product['productName']}}</h2>
                    </div>
                    <div class="product-price-container">
                        <h4>RM {{$product['productPrice']}}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <x-footer />
    </main>
</body>

<script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/functions.js"></script>

</html>