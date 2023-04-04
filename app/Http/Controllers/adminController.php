<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.black');
    }

    public function product(){
        return view('admin.sanpham');
    }
}

