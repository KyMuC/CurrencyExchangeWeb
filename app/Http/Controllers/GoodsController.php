<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class GoodsController extends Controller
{
    public function add(Request $request)
    {
        $name = $request->get('name');
        $category_id = $request->get('category_id');
        $description = $request->get('description');
        
        $p = new Product;
        
        $p->name = $name;
        $p->category_id = $category_id;
        $p->description = $description;

        $p->save();
    }

    public function index()
    {
        $gs = Product::all();
        return view('goods_view', ['goods' => $gs]);
    }
}
