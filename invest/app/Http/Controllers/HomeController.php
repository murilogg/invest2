<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use Closure;
//use Illuminate\Support\Facades\Auth;

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
    public function index($guard = null)
    {
        //if (Auth::guard($guard)->check()) {
        $ids = User::all();
        return view('home', compact('ids'));
        
    }
}
