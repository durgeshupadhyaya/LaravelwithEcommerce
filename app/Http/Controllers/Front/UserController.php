<?php

namespace App\Http\Controllers\Front;

use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('front.user.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:customers,email',
            'password' => 'required|confirmed'
        ]);

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->save();

        flash('Registration completed successfully. Please login to access your new account.', 'success');

        return redirect()->action('Front\UserController@showLoginForm');
    }

    public function showLoginForm()
    {
        return view('front.user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials, $request->remember)) {
            // Authentication passed...
            return redirect()->intended(action('Front\UserController@index'));
        }
        else {
            flash(__('auth.failed'), 'success');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();

        return redirect('/');
    }

    public function index()
    {
        $user = auth('customer')->user();

        $orders = $user->orders;

        return view('front.user.index', compact('user', 'orders'));
    }

    public function order(Order $order)
    {
        $details = $order->order_details;

        return view('front.user.order', compact('order', 'details'));
    }
}
