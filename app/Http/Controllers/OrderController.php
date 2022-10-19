<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        $orders = Order::all();

        return view('/orders', ['orders' => $orders]);
    }

    public function create()
    {
        $order = new Order();

        $order->name = request('name');
        $order->description = request('description');
        $order->features = request('features');
        $order->category = request('category');





        // code to capture current user id of one logged in currently.
        $order->user_id = Auth::id();
        $order->save();

        return redirect('/home')->with('msg', 'Order posted successfully');
    }
    public function destroy($id)
    {

        $order = Order::findOrFail($id);
        $order->delete();

        return redirect('/orders')->with('delete', 'Order checked successfully');
    }
}
