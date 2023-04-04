<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('clients.home.index');
    }

    public function product(){
        return view('clients.product.product');
    }
    public function productDetail(){
        return view('clients.product.productDetail');
    }
}
