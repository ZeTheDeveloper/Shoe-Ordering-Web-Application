<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Order</title>
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
</head>

<body>
  <!--header-->
  <x-header />
  <main id="main">
    <div class="container" style="padding: 30px 0;">
      <div class="row">
        <div class="col-md-12">
          @if(Session::has('order_message'))
          <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
          @endif
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-6">
                  <h4><strong>Order Details</strong></h4>
                </div>
                <div class="col-md-6">
                  @if($orders->status == 'O')
                  @can('delete', $orders)
                  <form method="GET" action="/orders/cancel/{{$orders['id']}}">
                    @method('get')
                    <button id="ajaxSubmit" class="btn btn-warning pull-right" style="margin:5px">Cancel Order</button>
                  </form>
                  @endcan
                  @endif
                </div>
              </div>
            </div>
            <div class="panel-body">
              <table class="table">
                <th>Order ID</th>
                <td>{{$orders->id}}</td>
                <th>Order Date</th>
                <td>{{$orders->ordered_date}}</td>
                <th>Order Status</th>
                @if($orders->status == 'O')
                <td>Ordered</td>
                @else
                <td>Cancelled</td>
                @endif
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4><strong>Ordered Shoes</strong></h4>
            </div>
            <div class="panel-body">
              <div class="wrap-iten-in-cart">
                <h3 class="box-title">Products Name</h3>
                <ul class="products-cart">
                  @foreach($items as $item)
                  <li class="pr-cart-item">
                    <div class="product-image">
                      <figure><img src="{{$item->product_image}}" alt="shoe"></figure>
                    </div>
                    <div class="product-name">{{$item->product_name}}</div>
                    <div class="price-field sub-total">
                      <p class="price" style="text-align:end">RM {{$item->product_price}}</p>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="summary">
                <div class="order-summary">
                  <h4 class="title-box">Order Summary</h4>
                  <p class="summary-info"><span class="title">Subtotal</span><b class="index">RM {{$orders->subtotal}}</b></p>
                  <p class="summary-info"><span class="title">Shipping cost</span><b class="index">RM {{$orders->ship_cost}}</b></p>
                  <p class="summary-info"><span class="title">Total</span><b class="index">RM {{$orders->total}}</b></p>
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
</body>