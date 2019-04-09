<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVenda extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createResgate(){
        return view('cadastroResgate');
    }
}
