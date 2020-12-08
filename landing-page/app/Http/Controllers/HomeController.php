<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array(
            'data_products'  => Product::with('product_descriptions')->get()
        );
        return view('layouts.index', $data);
    }
}
