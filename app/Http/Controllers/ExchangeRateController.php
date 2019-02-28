<?php

namespace App\Http\Controllers;
use App\Office;
use App\ExchangeRate;

class ExchangeRateController extends Controller
{
    public function index()
    {
        $offices = Office::all();
        // $exchange_rates = ExchangeRate::where('date',date('Y-m-d'))->get();

        return view('exchange_rates',['offices' => $offices]);
    }
}
