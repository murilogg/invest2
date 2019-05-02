<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ControladorUsuario extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        
        $edit = auth()->user();
        if(isset($edit)) {
            return view('fazerDeposito', compact('edit'));
        }
        return redirect('/home');
    }

    public function store(Request $request, $id)
    {
        $usuario = User::find($id);
            if (!$usuario) {
            // Aqui vai mostrar a pagina 404, ou seja, página de não encontrado
            abort(404);
        }
        $saldoAtual = $usuario->saldo;
        $usuario->update(['saldo' => $saldoAtual + request('deposito')]);
        $usuario->save();
        return redirect('/home');
    }

}
