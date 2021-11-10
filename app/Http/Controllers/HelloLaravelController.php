<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloLaravelController extends Controller
{
    public function index(){
        return ('HelloLaravel');
    }
}
