<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Orders</title>
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
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>All Orders</strong>
            </div>
            <div class="panel-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>User ID</th>
                    <th>Subtotal</th>
                    <th>Shipping cost</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Order Date</th>
                    <th style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                  @can('viewAny', $order)
                  <tr>
                    <th>{{$order->id}}</th>
                    <th>{{$order->user_id}}</th>
                    <th>{{$order->subtotal}}</th>
                    <th>{{$order->ship_cost}}</th>
                    <th>{{$order->total}}</th>
                    @if($order->status === 'O')
                    <th>Ordered</th>
                    @else
                    <th>Cancelled</th>
                    @endif
                    <th>{{$order->ordered_date}}</th>
                    <form method="GET" action="/orders/view/{{$order['id']}}">
                      @method('get')
                      <td style="text-align:center"><button id="ajaxSubmit" class="btn btn-info btn-sm">View Details</button></td>
                    </form>
                  </tr>
                  @endcan
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!--footer-->
  <x-footer />
</body>
