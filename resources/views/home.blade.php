<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/color-01.css">
</head>

<body class="home-page home-01 ">
	<!-- mobile menu -->
	<div class="mercado-clone-wrap">
		<div class="mercado-panels-actions-wrap">
			<a class="mercado-close-btn mercado-close-panels" href="#">x</a>
		</div>
		<div class="mercado-panels"></div>
	</div>

	<!--header-->
	<x-header />
	<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					<div class="item-slide">
						<img src="assets/images/main-slider1.jpg" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title">Kid's <b>Sneaker</b></h2>
							<span class="subtitle">Compra todos tus productos Smart por internet.</span>
							<p class="sale-info">Only price: <span class="price">$59.99</span></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="assets/images/main-slider2.jpg" alt="" class="img-slide">
						<div class="slide-info slide-2">
							<h2 class="f-title">Extra 25% Off</h2>
							<span class="f-subtitle">On online payments</span>
							<p class="discount-code">Use Code: #FA6868</p>
							<h4 class="s-title">Get Free</h4>
							<p class="s-subtitle">White Sport Socks</p>
						</div>
					</div>
					<div class="item-slide">
						<img src="assets/images/main-slider3.jpg" alt="" class="img-slide">
						<div class="slide-info slide-3">
							<h2 class="f-title">Discover the <b>Latest Running Collection</b></h2>
							<span class="f-subtitle">Special Limited Offer BLACK FRIDAY</span>
							<p class="sale-info">Stating at: <b class="price">$225.00</b></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
				</div>
			</div>

			<!--On Sale-->
			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">On Sale</h3>
				<div class="wrap-countdown mercado-countdown" data-expire="2022/5/12 12:34:56"></div>
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="/product/{{$product[0]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{$product[0]->productImage}}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="/product/{{$product[0]->id}}" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="/product/{{$product[0]->id}}" class="product-name"><span>{{$product[0]->productName}}</span></a>
							<div class="wrap-price"><ins>
									<p class="product-price">RM {{$product[0]->productPrice}}</p>
								</ins> <del>
									<p class="product-price">RM 9919.00</p>
								</del></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="/product/{{$product[1]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{$product[1]->productImage}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="/product/{{$product[1]->id}}" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="/product/{{$product[1]->id}}" class="product-name"><span>{{$product[1]->productName}}</span></a>
							<div class="wrap-price"><span class="product-price">RM {{$product[1]->productPrice}}</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="/product/{{$product[2]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{$product[2]->productImage}}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="/product/{{$product[2]->id}}" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="/product/{{$product[2]->id}}" class="product-name"><span>{{$product[2]->productName}}</span></a>
							<div class="wrap-price"><ins>
									<p class="product-price">RM {{$product[2]->productPrice}}</p>
								</ins> <del>
									<p class="product-price">RM 9919.00</p>
								</del></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="/product/{{$product[3]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{$product[3]->productImage}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="/product/{{$product[3]->id}}" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="/product/{{$product[3]->id}}" class="product-name"><span>{{$product[3]->productName}}</span></a>
							<div class="wrap-price"><span class="product-price">RM {{$product[3]->productPrice}}</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="/product/{{$product[4]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{$product[4]->productImage}}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="/product/{{$product[4]->id}}" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="/product/{{$product[4]->id}}" class="product-name"><span>{{$product[4]->productName}}</span></a>
							<div class="wrap-price"><ins>
									<p class="product-price">RM {{$product[4]->productPrice}}</p>
								</ins> <del>
									<p class="product-price">RM 9919.00</p>
								</del></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="/product/{{$product[5]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{$product[5]->productImage}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="/product/{{$product[5]->id}}" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="/product/{{$product[5]->id}}" class="product-name"><span>{{$product[5]->productName}}</span></a>
							<div class="wrap-price"><span class="product-price">RM {{$product[5]->productPrice}}</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="/product/{{$product[6]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{$product[6]->productImage}}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="/product/{{$product[6]->id}}" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="/product/{{$product[6]->id}}" class="product-name"><span>{{$product[6]->productName}}</span></a>
							<div class="wrap-price"><ins>
									<p class="product-price">RM {{$product[6]->productPrice}}</p>
								</ins> <del>
									<p class="product-price">RM 9919.00</p>
								</del></div>
						</div>
					</div>

				</div>
			</div>

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Latest Products</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="assets/images/shoes-crazy-sale.jpg" width="1170" height="120" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/product/{{$product[6]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{$product[6]->productImage}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="/product/{{$product[6]->id}}" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="/product/{{$product[6]->id}}" class="product-name"><span>{{$product[6]->productName}}</span></a>
											<div class="wrap-price"><span class="product-price">RM {{$product[6]->productPrice}}</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/product/{{$product[7]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{$product[7]->productImage}}" width="800" height="800" alt=""></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="/product/{{$product[7]->id}}" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="/product/{{$product[7]->id}}" class="product-name"><span>{{$product[7]->productName}}</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">RM {{$product[7]->productPrice}}</p>
												</ins> <del>
													<p class="product-price">RM 9919.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/product/{{$product[8]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{$product[8]->productImage}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="/product/{{$product[8]->id}}" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="/product/{{$product[8]->id}}" class="product-name"><span>{{$product[8]->productName}}</span></a>
											<div class="wrap-price"><span class="product-price">RM {{$product[8]->productPrice}}</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/product/{{$product[9]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{$product[9]->productImage}}" width="800" height="800" alt=""></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="/product/{{$product[9]->id}}" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="/product/{{$product[9]->id}}" class="product-name"><span>{{$product[9]->productName}}</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">RM {{$product[9]->productPrice}}</p>
												</ins> <del>
													<p class="product-price">RM 9919.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/product/{{$product[10]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{$product[10]->productImage}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="/product/{{$product[10]->id}}" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="/product/{{$product[10]->id}}" class="product-name"><span>{{$product[10]->productName}}</span></a>
											<div class="wrap-price"><span class="product-price">RM {{$product[10]->productPrice}}</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/product/{{$product[11]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{$product[11]->productImage}}" width="800" height="800" alt=""></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="/product/{{$product[11]->id}}" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="/product/{{$product[11]->id}}" class="product-name"><span>{{$product[11]->productName}}</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">RM {{$product[11]->productPrice}}</p>
												</ins> <del>
													<p class="product-price">RM 9919.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/product/{{$product[12]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{$product[12]->productImage}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="/product/{{$product[12]->id}}" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="/product/{{$product[12]->id}}" class="product-name"><span>{{$product[12]->productName}}</span></a>
											<div class="wrap-price"><span class="product-price">RM {{$product[12]->productPrice}}</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/product/{{$product[13]->id}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{$product[13]->productImage}}" width="800" height="800" alt=""></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="/product/{{$product[13]->id}}" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="/product/{{$product[13]->id}}" class="product-name"><span>{{$product[13]->productName}}</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">RM {{$product[13]->productPrice}}</p>
												</ins> <del>
													<p class="product-price">RM 9919.00</p>
												</del></div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="assets/images/product-category.jpeg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							<a href="#fashion_1a" class="tab-control-item active">Man</a>
							<a href="#fashion_1b" class="tab-control-item">Woman</a>
							<a href="#fashion_1c" class="tab-control-item">Kid</a>
						</div>
						<div class="tab-contents">

							<div class="tab-content-item active" id="fashion_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_01.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Lois Caron LCS-4027 Analog Watch - For Men</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Business Men Leather Laptop Tote Bags Man Crossbody </span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1b">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1c">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1d">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_01.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="assets/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quic view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="product-rating">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<div class="wrap-price"><ins>
													<p class="product-price">$168.00</p>
												</ins> <del>
													<p class="product-price">$250.00</p>
												</del></div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>

	<!--footer-->
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