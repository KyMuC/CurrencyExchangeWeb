<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Order;

class OrderController extends Controller
{
    public function showOrderForm() {
        if(!Auth::user()->isAdmin()) {
            return view('add_order');
        }
        else {
            return redirect('/home');
        }
    }

    public function add(Request $request) {
        $target_currency_code = $request->get('target_currency_code');
        $office_id = $request->get('office_id');
        $target_currency_amount = $request->get('target_currency_amount');

        $order = new Order;

        $order->target_currency_code = $target_currency_amount;
        $order->office_id = $office_id;
        $order->target_currency_amount = $target_currency_amount;

        $order->save();
    }
}
