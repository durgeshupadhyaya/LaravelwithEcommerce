<?php

namespace App\Http\Controllers\Front;

use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{

    public function index(Request $request)
    {
        $cart = $this->getCart($request);

        return view('front.checkout.index', compact('cart'));
    }

    public function checkout(Request $request)
    {
        $cart = json_decode($request->cart);

        $order = new Order;
        $order->customer_id = auth('customer')->id();
        $order->total = $request->total;
        $order->save();

        foreach($cart as $item) {
            $product = Product::where('name', $item->product)->first();
            $detail = new OrderDetail;
            $detail->order_id = $order->id;
            $detail->product_id = $product->id;
            $detail->qty = $item->quantity;
            $detail->price = $item->amount;
            $detail->save();
        }

        flash('Order confirmed.', 'success');

        return redirect()->action('Front\UserController@index');
    }

    private function getCart($request)
    {
        $all = $request->all();
        unset($all['bn']);
        unset($all['upload']);
        unset($all['cmd']);

        $flg = true;

        $cart = [];

        for($i = 1; $flg; $i++) {
            if(key_exists('quantity_'.$i, $all)) {
                $cart[] = [
                    'product' => $all['googles_item_'.$i],
                    'quantity' => $all['quantity_'.$i],
                    'amount' => $all['amount_'.$i]
                ];
            }
            else {
                $flg = false;
            }
        }

        return $cart;
    }

}
