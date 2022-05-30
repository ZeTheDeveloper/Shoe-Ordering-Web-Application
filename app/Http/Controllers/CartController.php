<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    function loadUserCart()
    {

        $userEmail = Session::get('userEmail');
        $retrievedUser = User::where('email', $userEmail)->first();

         $data = Cart::select('carts.*', 'products.*')
            ->where('user_id', $retrievedUser['id'])
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->get();

        return view('cart', ['cartlist' => $data]);
    }

    public function deleteSelectedCart($id)
    {

        $userEmail = Session::get('userEmail');
        $retrievedUser = User::where('email', $userEmail)->first();

        $retrievedCart = Cart::where('user_id', $retrievedUser['id'])
            ->where('product_id', $id)
            ->get()
            ->first();

        $retrievedCart->delete();

        $deletedCart = "<script>
            
        alert(`Successfully deleted!`);
        window.history.back()

        </script>";

        return $deletedCart;
    }
}
