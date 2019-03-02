<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use App\Order;
use App\Employee;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = Currency::all();
        $orders_customer = Order::where('customer_passport_number', Auth::user()->passport_number)->get(); 
        if(Auth::user()->isAdmin())
        {
            $orders_employee = Order::where('office_id', Employee::where('passport_number', Auth::user()->passport_number)->first()->exchange_office_id)->get();
        }
        else
        {
            $orders_employee = [];
        }
        return view('home', ['currencies' => $currencies, 'orders_customer' => $orders_customer, 'orders_employee'=>$orders_employee]);
    }
}
