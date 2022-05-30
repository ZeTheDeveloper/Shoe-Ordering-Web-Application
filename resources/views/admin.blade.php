<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Products</title>
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
  <link rel="stylesheet" type="text/css" href="{{ url('/css/admin.css') }}" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<!--header-->
<x-header />
<div class="container">

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  @if (\Session::has('success'))
  <div class="alert alert-success">
    <ul>
      <li>{!! \Session::get('success') !!}</li>
    </ul>
  </div>
  @endif

  <div class="row justify-content-center col-md-12 py-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="col-md-6">All Products</div>
          <div class="col-md-6 create-button">
            @can('createProduct')
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" id="open">Create New Product</button>
            @endcan
          </div>
        </div>
        <div class="card-body row">
          @foreach($products as $product)
          @can('viewAny', $product)
          <div class="col-md-2 mt-3"> <img src="{{$product['productImage']}}" onerror="this.src='https://png.pngtree.com/png-vector/20190223/ourmid/pngtree-vector-picture-icon-png-image_695350.jpg'" /></div>
          <div class="card-header col-md-10 mt-3">
            <div class="card-body"> {{$product['productName']}}</div>
            <div class="card-body"> {{$product['productDesc']}} </div>
            <div class="row text-align-end justify-content-end">
              @can('update', $product)
              <div class="col-md-3">
                <button type="button" class="btn btn-primary float-right col-md-10" data-toggle="modal" data-target="#editModal" id="open">
                  Edit
                </button>
              </div>
              @endcan

              @can('delete', $product)
              <form method="POST" class="col-md-3" action="/products/{{$product['id']}}">
                @csrf
                @method('delete')
                <div class="">
                  <button type="submit" class="btn btn-danger float-right col-md-10">
                    Delete
                  </button>
                </div>
              </form>
              @endcan
            </div>
            @endcan
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Create Modal -->
<div class="modal" tabindex="-1" role="dialog" id="myModal" aria-labelledby="myModal" aria-hidden="true">
  <form method="GET" action="/products/create">
    @method('get')
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="alert alert-danger" style="display:none"></div>
        <div class="modal-header">

          <h5 class="modal-title col-md-11">Create New Product</h5>
          <button type="button" class="close col-md-1" data-dismiss="modal" aria-label="Close">
            <span classs="close" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productName">Product Name:</label>
              <input type="text" class="form-control" name="productName" id="productName">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productDesc">Product Description: </label>
              <input type="text" class="form-control" name="productDesc" id="productDesc">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productQty">Quantity:</label>
              <input type="text" class="form-control" name="productQty" id="productQty">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productPrice">Price:</label>
              <input type="text" class="form-control" name="productPrice" id="productPrice">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productImage">Image url:</label>
              <input type="text" class="form-control" name="productImage" id="productImage">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button onclick="doSomethingBeforeClosing()" class="btn btn-success" id="ajaxSubmit">Create Product</button>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Edit Modal -->
<div class="modal" tabindex="-1" role="dialog" id="editModal">
  <form method="POST" action="/products/edit/{{$product['id']}}">
    @method('post')
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="alert alert-danger" style="display:none"></div>
        <div class="modal-header">

          <h5 class="modal-title col-md-11">Edit Product ID {{$product['id']}}</h5>
          <button type="button" class="close col-md-1" data-dismiss="modal" aria-label="Close">
            <span classs="close" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productName">Product Name:</label>
              <input type="text" class="form-control" name="productName" id="productName" value="{{$product['productName']}}">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productDesc">Product Description: </label>
              <input type="text" class="form-control" name="productDesc" id="productDesc" value="{{$product['productDesc']}}">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productQty">Quantity:</label>
              <input type="text" class="form-control" name="productQty" id="productQty" value="{{$product['productQty']}}">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productPrice">Price:</label>
              <input type="text" class="form-control" name="productPrice" id="productPrice" value="{{$product['productPrice']}}">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="productImage">Image url:</label>
              <input type="text" class="form-control" name="productImage" id="productImage" value="{{$product['productImage']}}">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-success" id="ajaxSubmit">Edit Product</button>
        </div>
      </div>
    </div>
  </form>
</div>
<!--footer-->
<x-footer />

<script>

</script>

<script src="/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.flexslider.js"></script>
<script src="/assets/js/chosen.jquery.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.countdown.min.js"></script>
<script src="/assets/js/jquery.sticky.js"></script>
<script src="/assets/js/functions.js"></script>