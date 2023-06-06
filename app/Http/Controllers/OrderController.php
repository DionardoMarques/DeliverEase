<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;

class OrderController extends Controller
{
    public function index()
    {
        return view('welcome', ['orders' => Order::all()], ['customers' => Customer::all()]);
    }

    public function saveOrder(Request $request)
    {
        $newOrder = new Order;

        $newOrder->customer_id = $request->customer_id;
        $newOrder->customer_name = $request->customer_name;
        $newOrder->delivery_date = $request->delivery_date;
        $newOrder->freight_value = $request->freight_value;

        $newOrder->save();

        return redirect('/');
    }
}
