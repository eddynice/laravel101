<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = crud::all(); //fetch all products from DB
      
        return view('home', ['products' => $products]);
    }
}
