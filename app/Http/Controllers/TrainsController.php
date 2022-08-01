<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainsController extends Controller
{
        function index()
        {
            $train = trains::all();
            return view('app');
        }
    
}
