<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;


class OrderController extends Controller
{
    public function loadAllOrder()
    {
        
        $query = DB::query()->from('orders')
            ->select( 
                'orders.id as order_id', 
                'users.email as user_email', 
                'orders.subtotal',
                'orders.ship_cost',
                'orders.total',
                DB::raw('(CASE WHEN orders.status = "O" THEN "Ordered" ELSE "Cancelled" END) as order_status'), 
                'orders.ordered_date')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->orderBy('orders.id', 'desc')
            ->get();
        
        // if(Auth::guard('admin')->check()){
        //     $query = DB::query()->from('orders')
        //     ->select( 
        //         'orders.id as order_id', 
        //         'users.email as user_email', 
        //         'orders.subtotal',
        //         'orders.ship_cost',
        //         'orders.total',
        //         DB::raw('(CASE WHEN orders.status = "O" THEN "Ordered" ELSE "Cancelled" END) as order_status'), 
        //         'orders.ordered_date')
        //     ->leftJoin('users', 'users.id', '=', 'orders.user_id')
        //     ->orderBy('orders.id', 'desc')
        //     ->get();

        // }else{
        //     $query = DB::query()->from('orders')
        //     ->select( 
        //         'orders.id as order_id', 
        //         'users.email as user_email', 
        //         'orders.subtotal',
        //         'orders.ship_cost',
        //         'orders.total',
        //         DB::raw('(CASE WHEN orders.status = "O" THEN "Ordered" ELSE "Cancelled" END) as order_status'), 
        //         'orders.ordered_date')
        //     ->leftJoin('users', 'users.id', '=', 'orders.user_id')
        //     ->where('orders.id', '=', Auth::guard('user')->user()->id)
        //     ->orderBy('orders.id', 'desc')
        //     ->get();

        // }

        return view('allOrder', ['orders'=>$query]);
    }

    public function cancelOrder($order_id)
    {
        $order = Order::findorFail($order_id);
        $order->status = 'C';
        $order->save();
        session()->flash('order_message', 'Order has been cancel successfully');

        $orders = Order::all();

        return redirect("/order/indexAdmin");
    }

    public function indexAdmin()
    {
        $orders = Order::all();

        return view('allOrder', ['orders' => $orders]);
    }

    
    public function viewOrder(Request $req){
        $req = Order::findorFail($req->id);

       $user = User::find(auth()->id());

       if($user->role === 'customer'){
           // allow customer to view own order only
           $this->authorize('customerViewOrder', $req->user_id);

           $query = DB::query()->from('order_items')
                ->select( 
                    'products.productImage as product_image',
                    'products.productName as product_name',
                    'products.productPrice as product_price')
                ->leftJoin('products', 'products.id', '=', 'order_items.product_id')
                ->leftJoin('orders', 'orders.id', '=', 'order_items.order_id')
                ->where('order_items.order_id', '=', $req->id)
                ->orderBy('products.productName', 'asc')
                ->get();
            $amount = Order::find($req->id);

        } elseif($user->role === 'admin'){

            // Allow admin to view all order
            $this->authorize('isAdmin');

           $query = DB::query()->from('order_items')
                ->select( 
                    'products.productImage as product_image',
                    'products.productName as product_name',
                    'products.productPrice as product_price')
                ->leftJoin('products', 'products.id', '=', 'order_items.product_id')
                ->leftJoin('orders', 'orders.id', '=', 'order_items.order_id')
                ->where('order_items.order_id', '=', $req->id)
                ->orderBy('products.productName', 'asc')
                ->get();
            $amount = Order::find($req->id);
        }

        return view('adminOrderDetails', ['items'=>$query, 'orders'=>$amount]);
    }

    public function indexCustomer()
    {
        $user = User::find(auth()->id());

         $allOrders = Order::all();
         $orders = array();

         foreach ($allOrders as $order){
            
              if($order->user_id == $user->id){                
                  array_push($orders, $order);
               }
          }
          return view('allOrder', ['orders' => $orders]);

    }
}
