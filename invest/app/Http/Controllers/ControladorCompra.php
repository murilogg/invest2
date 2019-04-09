<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use App\Empresa;
use App\User;

class ControladorCompra extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cotacoes()
    {
        $list = Empresa::all(); 
        return view('cotacoes', compact('list'));
    }

    public function store(Request $request, $id)
    {

        $altera = Empresa::find($id);
            if (!$altera) {
            // Aqui vai mostrar a pagina 404, ou seja, página de não encontrado
            abort(404);
        }
        $quantidadeAtual = $altera->acoes;
        $preco = $altera->preco;
        $altera->update(['acoes' => $quantidadeAtual - request('quantidade')]);
        $altera->save();

        $novo = new Compra();
        $novo->tipo = $request->input('categoria');
        $novo->quantidade = $request->input('quantidade');
        $novo->valorCompra = input($preco);
        $novo->empresa_id = $request->input($id);
        //$novo->users_id = $request->input();
        $novo->save();

        $var = Compra::all();
        foreach ($var as $v) {
            echo "$v <br>";
        }


        //return redirect('/carteira');
    }
}
