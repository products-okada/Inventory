<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDataController extends Controller
{
    public function signup(){
        return view('productSignup');
    }

    public function list(){
        return view('productList');
    }

    public function edit(){
        return view('productEdit');
    }

}
