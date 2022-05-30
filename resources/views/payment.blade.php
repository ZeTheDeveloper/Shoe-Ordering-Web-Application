<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment - SNKYS</title> <!-- Title of the page -->
    <meta charset="utf-8"> <!-- Official charset -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1019/1019607.png" type="image/x-icon"> <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> <!-- bootstrap 5 -->
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
    <link rel="stylesheet" type="text/css" href="assets/css/payment.css">
</head>

<body>
    <x-header />
    <main id="main">
        <div class="container">
            <form action="confirmation" method="POST">
                {{csrf_field()}}
                <div>
                    <h1>Payment </h1>
                </div>
                <br>
                <div class="row">
                    <div class="col-8">
                        <div class="paymentMethod container-fluid">
                            <div>
                                <h3>Payment Method</h3>
                            </div>
                            <hr>
                            <div class="paymentOptions">
                                <div class="paymentRadioBox">
                                    <input class="form-check-input" type="radio" name="typeOfPayment" id="MasterCard">
                                    <label class="form-check-label" for="MasterCard">MasterCard </label>
                                    <img src="https://1000logos.net/wp-content/uploads/2017/03/MasterCard-Logo-1990.png" class="img-thumbnail">

                                    <input class="form-check-input" type="radio" name="typeOfPayment" id="Visa">
                                    <label class="form-check-label" for="Visa"> Visa</label>
                                    <img src="https://icons-for-free.com/download-icon-payment+online+transaction+payment+method+visa+icon-1320186278106432321_512.png" class="img-thumbnail">

                                    <input class="form-check-input" type="radio" name="typeOfPayment" id="Paypal">
                                    <label class="form-check-label" for="Paypal"> Paypal</label>
                                    <img src="https://cdn.freebiesupply.com/logos/large/2x/paypal-icon-logo-png-transparent.png" class="img-thumbnail">
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="cardNumber" class="form-label">Card Number</label>
                                            <input type="number" class="form-control" id="cardNumber" placeholder="xxxx-xxxx-xxxx-xxxx">
                                        </div>
                                        <div class="mb-3">
                                            <label for="cardName" class="form-label">Card Name</label>
                                            <input type="text" class="form-control" id="cardName">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="expDate" class="form-label">Expiration Date</label>
                                            <input type="month" class="form-control" id="expDate" placeholder="MM/YY">
                                        </div>
                                        <div class="mb-3">
                                            <label for="CVV" class="form-label">CVV</label>
                                            <input type="password" maxlength="3" class="form-control" id="cardName">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br><br>
                        <div class="shipmentMethod container-fluid">
                            <div>
                                <h3>Shipment</h3>
                            </div>
                            <hr>
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="shipmentMethod mb-3">
                                            <label for="shipmentAddress" class="form-label">Shipment Address</label>
                                            <input type="textfield" class="form-control" id="shipmentAddress" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="buttonConfirm container-fluid">
                            <div>
                                <input type="hidden" id="totalCost" name="totalCost" value="">
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="paymentCartItems container-fluid">
                            <div>
                                <h3>Cart Items</h3>
                            </div>
                            <hr>
                            <div>
                                <div class="row" data="cartlist">
                                    @foreach($cartlist as $cart)
                                    <div class="row container-fluid d-flex align-items-center">
                                        <div class="col-sm-9">
                                            <h4>{{$cart->productName}}</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>X {{$cart->quantityInCart}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                            <div class="row" style="padding-left:15px; padding-right:15px;">
                                <div class="col-4">
                                    <p>Total: RM</p>
                                </div>
                                <div class="col">
                                    <p id="cart_subtotal">
                                        <?php
                                        $shipcost = 4.99;
                                        $totalSubCost = number_format((float)$_SESSION["totalCartPrice"], 2, '.', '');
                                        $totalCost = $shipcost + $totalSubCost;
                                        echo $totalCost;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <x-footer />
    </main>
</body>

<script>
    document.getElementById("totalCost").value = document.getElementById("cart_subtotal").innerHTML;
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