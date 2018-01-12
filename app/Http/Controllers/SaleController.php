<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
    	
    }

    public function create()
    {
        return view('sale.create');
    }
}
