<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Order;

class CategoryController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $categories = Category::all();

        return view('categories', ['orders' => $orders, 'categories' => $categories]);
    }
}
