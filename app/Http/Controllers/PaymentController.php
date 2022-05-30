<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Order_Item;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class PaymentController extends Controller
{

    function paymentLoadUserCart()
    {

        $userEmail = Session::get('userEmail');
        $retrievedUser = User::where('email', $userEmail)->first();

        $data = DB::table('carts')
            ->where('user_id', $retrievedUser['id'])
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->select('carts.*', 'products.*')
            ->get();

        return view('payment', ['cartlist' => $data]);
    }

    function processPayment(Request $req)
    {

        $userEmail = Session::get('userEmail');
        $retrievedUser = User::where('email', $userEmail)->first();

        $userEmail = $req->input('userEmail');
        $total = $req->input('totalCost');
        $total = (float)$total;
        $subtotal = $total - 4.99;
        $current_date_time = Carbon::now()->toDateTimeString();

        Order::create([
            'user_id' => $retrievedUser['id'],
            'subtotal' => $subtotal,
            'ship_cost' => 4.99,
            'total' => $total,
            'status' => 'O',
            'ordered_date' => $current_date_time,
        ]);

        $retrieveOrder = Order::orderBy('id', 'desc')->first();

        $orderID = $retrieveOrder->id;

        $retrievedCart = Cart::where('user_id', $retrievedUser->id)->get();

        foreach($retrievedCart as $cart){

            $orderItems = array(
                'order_id'=>$orderID,
                "product_id"=>$cart->product_id,
            );

            Order_Item::create($orderItems);
        }

        Cart::select('carts.*', 'products.*')
            ->where('user_id', $retrievedUser['id'])
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->delete();
        
       return redirect('success');
    }
}
