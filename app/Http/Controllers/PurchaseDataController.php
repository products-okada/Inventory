<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseDataController extends Controller
{
    public function signup(){
        return view('purchaseSignup');
    }

    public function list(){
        return view('purchaseList');
    }

    public function edit(){
        return view('purchaseEdit');
    }
}
