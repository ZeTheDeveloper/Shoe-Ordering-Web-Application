<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart - SNKYS</title> <!-- Title of the page -->
    <meta charset="utf-8"> <!-- Official charset -->
    <link rel="icon" href="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/000000/external-cart-essentials-icongeek26-linear-colour-icongeek26.png" type="image/x-icon"> <!-- icon -->
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
    <link rel="stylesheet" type="text/css" href="assets/css/cart.css">
</head>

<body>
    <x-header />
    <main id="main">
        <div class="container">
            <?php session_unset();
            $_SESSION["totalCartPrice"] = 0;  ?>
            <div>
                <h1>Your Cart </h1>
            </div>
            <div data="cartlist">
                @include('components/cartlist')
            </div>
            @if($_SESSION["totalCartPrice"] == 0)
            <div>

            </div>
            @else
            <hr>
            <div class="row">
                <div class="col-sm-5">
                    <div class="container-fluid" id="payment-container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <h5 id="PaymentLabel">Subtotal:</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 align-self-end">
                                <p id="cart_subtotal">RM
                                    <?php
                                    echo $_SESSION["totalCartPrice"];
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <h5 id="PaymentLabel">Shipping Cost:</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 align-self-end">
                                <p id="shipping_cost">RM 4.99</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <h5 id="PaymentLabel">Total Cost:</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 align-self-end">
                                <p id="total_cart_cost"></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <a class="btn btn-dark" id="proceedCheckout" href="payment" role="button">Proceed to Checkout</a>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-between">
                                <a href="/product" class="btn btn-light" id="continueShopping" href="payment" role="button">Continue To Shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <br>
        <x-footer />
    </main>
</body>

<script>
    //calculate the total cost
    var cart = parseFloat(document.getElementById("cart_subtotal").textContent.replace(/[^0-9.]/g, ''));
    var shippingCost = parseFloat(document.getElementById("shipping_cost").textContent.replace(/[^0-9.]/g, ''));
    var totalPrice = cart + shippingCost;
    document.getElementById("total_cart_cost").innerHTML = "RM " + totalPrice.toFixed(2);
</script>

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