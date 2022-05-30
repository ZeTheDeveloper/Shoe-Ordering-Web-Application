@if(count($cartlist) == 0)
<div class="container-fluid" id="empty-cart-items">
    <div>
        <img src="assets/images/empty-cart.png" class="img-fluid">
    </div>
    <div>
        <h2>Empty Cart</h2>
    </div>
    <div>
        <p>It appears that your shopping cart is very empty!</p>
    </div>
</div>
@else

@foreach($cartlist as $cart)
<div class="container-fluid" id="cart-items">
    <div class="row">
        <div class="col-sm-2 align-self-center" id="cartimage">
            <img src="{{$cart->productImage}}" class="img-fluid">
        </div>
        <div class="col-sm-5">
            <div class="row">
                <h6>{{$cart->productName}} </h6>
            </div>
            <div class="row">
                @if($cart->productQty > 0)
                <p style="color: green">In Stock</p>
                @else
                <p  style="color: red"> Out of Stock </p>
                @endif
            </div>
            <div class="row">
                <p>Size: {{$cart->productSelectedSize}}</p>
            </div>
            <div class="row">
                <p id="cartPrice">RM {{$cart->productPrice}} </p>
            </div>
        </div>
        <div class="col-sm-2" id="image">
            <div class="row">
                <p>Quantity: {{$cart->quantityInCart}}</p>
            </div>
            <div class="row align-self-center">
                <p id="cartTotalPrice">RM {{$cart->totalProductCost}}</p>
            </div>
        </div>
        <div class="col-sm-1 align-self-center">
            <a class="btn btn-danger" href={{"deleteSelectedCart/".$cart->product_id}} role="button">Delete</a>
        </div>
    </div>
</div>

<?php
$totalCartPrice[] = $cart->totalProductCost;
?>
@endforeach

<?php

$totalPP = 0;
$totalPP = array_sum($totalCartPrice);

$_SESSION["totalCartPrice"] = $totalPP;
?>

@endif
