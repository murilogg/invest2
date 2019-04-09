<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCarteira extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function carteira()
    {
        //$list = Empresa::all(); 
        return view('carteira');
    }
}
