<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('allproduct', ['product' => $data]);

    }

    function homeCarousel(){

        $data = Product::all();
        return view('home', ['product' => $data]);
        
    }

    function details($id)
    {
        $data = Product::find($id);
        return view('product',['product'=>$data]);
    }

    function addToCart(Request $req, $id){

        $productData = Product::find($id);

        $userEmail = $req->input('userEmail');
        $quantity = $req->input('quantity');

        $retrievedUser = User::where('email',$userEmail)->first();

        $validateExistedProduct = Cart::where('user_id', $retrievedUser['id'])
        ->where('product_id',$productData['id'])
        ->where('quantityInCart', $quantity)->first();

        if(!empty($validateExistedProduct)){

            $existed = "<script>
            
            alert(`This product has already been added`);
            window.history.back()

            </script>";
            return  $existed;

        }else{

        Cart::where('user_id', $retrievedUser['id'])
        ->where('product_id',$productData['id'])->delete();

        }

        $totalProductCost = $quantity * $productData['productPrice'];
        $totalProductCost = number_format((float)$totalProductCost, 2, '.', '');

        Cart::create([
            'user_id' => $retrievedUser['id'],
            'product_id' => $productData['id'],
            'quantityInCart' => $quantity,
            'productSelectedSize' => 'L',
            'totalProductCost' => $totalProductCost,
            ]);
        
            $successfulCart =
            "<script>
            
            alert(`Successfully added to cart!`);
            window.history.back()

            </script>";

        return $successfulCart;
        
    }

    public function indexAdmin()
    {
        $products = Product::all();
        return view('admin', ['products' => $products]);
    }

    public function show(){
        $products = Product::all();
        return view('product.show', ['products' => $products]);
        session()->flash('message', 'Product has been deleted successfully');
    }

    public function create(Request $req){

        $this->validate($req, [
                'productName' => 'required',
                'productDesc' => 'required',
                'productQty' => 'required|numeric',
                'productPrice' => 'required|numeric',
                'productImage' => 'required|active_url'
            ]);

        $product = $req->all();
        Product::create($product);

        return redirect("/product/indexAdmin")->with('success', 'Successfully Added!');

    }

    public function edit(Request $req){
        $data = Product::find($req->id);

        $this->validate($req, [
            'productName' => 'required',
            'productDesc' => 'required',
            'productQty' => 'required|numeric',
            'productPrice' => 'required|numeric',
            'productImage' => 'required|active_url'
        ]);

        $data->productName = $req->productName;
        $data->productDesc = $req->productDesc;
        $data->productQty = $req->productQty;
        $data->productPrice = $req->productPrice;
        $data->productImage = $req->productImage;

        $data->save();

        return redirect("/product/indexAdmin")->with('success', 'Successfully edited the product!');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/product/indexAdmin');
    }
}
