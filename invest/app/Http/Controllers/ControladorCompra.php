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
        if(Empresa::count() > 0){
            return view('cotacoes', compact('list'));
        }else{
            return view('cotacoes');
        }
    }

    public function store(Request $request, $id)
    {
        //auth()->user();   //Para acessar o usuário atualmente logado tu faz assim:
        //auth()->id();     //Para pegar o id dele:
        //auth()->check();  //Para checar se tem algum usuario logado:
        $altera = Empresa::find($id);
            if (!$altera) {
            // Aqui vai mostrar a pagina 404, ou seja, página de não encontrado
            abort(404);
        }
        $quantidadeAtual = $altera->acoes;
        $acoesCompradas = $request->input('quantidade');
        
        $user = auth()->user(); 
        $saldo = $user->saldo;

        $multi = $acoesCompradas * $altera->preco;
        if($saldo > $multi){
            $user->update(['saldo' => $saldo - $multi]);
            $user->save();
            $altera->update(['acoes' => $quantidadeAtual - request('quantidade')]);
            $altera->save();
            $novo = new Compra();
            $novo->tipo = $request->input('categoria');
            $novo->quantidade = $request->input('quantidade');
            $novo->valorCompra = $altera->preco;
            $novo->nomeEmpresa = $altera->nome;
            $novo->empresa_id = $id;
            $novo->users_id = auth()->id();
            $novo->save();
        }else{
            echo "Saldo insuficiente <br>";
        }
        return redirect('/index');
    }

}
