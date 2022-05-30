<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu right-menu">
                        <ul>
                            {{-- @if(Session::get('is_login') == 1)
                            @if(Auth::user()->role === "admin")
                               <li class="menu-item menu-item-has-children parent">
                                     <a title="My Account" href="#"> My Account ({{session('admin')}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a title="All product" href="#">All Products</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="All order" href="#">All Orders</a>
                                    </li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li class="menu-item">
                                            <a title="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); .closest('form').submit();">
                                                Logout
                                            </a>
                                        </li>
                                    </form>
                                </ul>
                                </li>
                            @else --}}
                            {{-- <li class="menu-item menu-item-has-children parent">
                                        <a title="My Account" href="#"> My Account ({{session('customer')}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a title="All product" href="/product">Products</a>
                                </li>
                                <li class="menu-item">
                                    <a title="All cart" href="cart">My Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a title="All order" href="/order">My Orders</a>
                                </li>
                                <li class="menu-item">
                                    <a title="logout" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                                <form id="logout-form" method="GET" action="/logout" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                            </li> --}}
                            {{-- @endif --}}
                            @if(Session::get('is_login') == 1)
                            @if(Auth::user()->role == "customer")
                            <li class="menu-item menu-item-has-children parent">
                                <a title="My Account" href="#"> My Account ({{session('user')}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a title="All product" href="/product">Products</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="All cart" href="cart">My Cart</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="All order" href="/order">My Orders</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="logout" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                    <form id="logout-form" method="GET" action="/logout" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            @elseif(Auth::user()->role == "admin")
                            <li class="menu-item menu-item-has-children parent">
                                <a title="My Account" href="#"> My Account ({{session('user')}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a title="Home" href="/home">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="All product" href="/product/indexAdmin">All Products</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="All order" href="/order/indexAdmin">All Orders</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="logout" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                    <form id="logout-form" method="GET" action="/logout" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            @endif
                            @else
                            <li class="menu-item"><a title="Register or Login" href="/login/showLoginForm">Login</a></li>
                            <li class="menu-item"><a title="Register or Login" href="/register/customerRegisForm">Register</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="mid-section main-info-area">
                    <div class="wrap-logo-top left-section">
                        <h1 style="margin-top:10px"><strong>SNKYS</strong></h1>
                    </div>
                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="#" id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Search here...">
                                <button form="form-search-top" type="button" style="right:-1px"><i class="fa fa-search" aria-hidden="true"></i></button>
                                <div class="wrap-list-cate">
                                    <input type="hidden" name="product-cate" value="0" id="product-cate">
                                    <a href="#" class="link-control">All Category</a>
                                    <ul class="list-cate">
                                        <li class="level-0">All Category</li>
                                        <li class="level-1">-Man</li>
                                        <li class="level-1">-Woman</li>
                                        <li class="level-1">-Kid</li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section wishlist">
                            <a href="#" class="link-direction">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index">0 item</span>
                                    <span class="title">Wishlist</span>
                                </div>
                            </a>
                        </div>
                        @if(empty(session('user')))
                        <div class="wrap-icon-section minicart">
                            <a href="/login/showLoginForm" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>
                        @else
                        <div class="wrap-icon-section minicart">
                            <a href="/cart" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>
                        @endif
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="/home" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            {{-- @if(Session::get('is_login') == 1)
                                @auth
                                    @if(Auth::user()->role == "admin")
                                        <li class="menu-item">
                                            <a href="allProduct.html" class="link-term mercado-item-title">All Products</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="cart" class="link-term mercado-item-title">All Order</a>
                                        </li>
                                    @else
                                        <li class="menu-item">
                                            <a href="/product" class="link-term mercado-item-title">Products</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="cart" class="link-term mercado-item-title">My Cart</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/order" class="link-term mercado-item-title">My Orders</a>
                                        </li>
                                    @endif
                                @else --}}
                            <li class="menu-item">
                                <a href="/product" class="link-term mercado-item-title">Products</a>
                            </li>
                            <li class="menu-item">
                                @if(empty(session('user')))
                                <a href="/login/showLoginForm" class="link-term mercado-item-title">My Cart</a>

                                    @else
                                    @if(Auth::user()->role == "admin")
                                        <a href="/product/indexAdmin" class="link-term mercado-item-title">All Product</a>
                                    @else
                                        <a href="/cart" class="link-term mercado-item-title">My Cart</a>
                                    @endif
                                @endif
                            </li>
                            <li class="menu-item">
                                @if(empty(session('user')))
                                <a href="/login/showLoginForm" class="link-term mercado-item-title">My Orders</a>
                                @else
                                     @if(Auth::user()->role == "admin")
                                        <a href="/order/indexAdmin" class="link-term mercado-item-title">All Orders</a>
                                     @else
                                         <a href="/order" class="link-term mercado-item-title">My Orders</a>
                                     @endif
                                         
                                @endif
                            </li>
                            {{-- @endif
                            @else
                                <li class="menu-item">
                                    <a href="/product" class="link-term mercado-item-title">Products</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">My Cart</a>
                                </li>
                            @endif --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
