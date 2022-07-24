<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
            'title' => 'home'
        
          ]);
    }

    public function store(Request $request) {
        return Product::create([$request->all()]);
        // return $request;
    }
}
