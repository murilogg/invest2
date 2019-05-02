<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Compra;
use Illuminate\Support\Facades\DB;

class ControladorEmpresa extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function telaPrincipal()
    {
        $empresa = Empresa::all();
        $compra = Compra::all();
        if(isset($empresa) and isset($compra)){
            $dados=DB::table('compras')
                ->select(
                    DB::raw('nomeEmpresa'),
                    DB::raw('sum(quantidade) as number'))
                ->groupBy('nomeEmpresa')
                ->get();
            $array[] = ['NomeEmpresa', 'Number'];
            foreach ($dados as $key => $value) {
                $array[++$key] = [$value->nomeEmpresa, $value->number];
            }
            return view('index')->with('nomeEmpresa', json_encode($array));
        }else{
            return view('index');
        }
    }   

    public function index()
    {
        $listar = Empresa::all();
        if(Empresa::count() > 0){
            return view('empresa', compact('listar'));
        }else{
            return view('empresa');
        }
    }

    public function createEmpresa()
    {
        return view('cadastroEmpresa');
    }

    public function store(Request $request)
    {
        $novo = new Empresa();
        $novo->nome = $request->input('nomeEmpresa');
        $novo->sigla = $request->input('sigla');
        $novo->preco = $request->input('preco');
        $novo->acoes = $request->input('acoes');
        $novo->descricao = $request->input('descricao');
        $novo->categoria = $request->input('categoria');
        $novo->user_id = auth()->id();
        $novo->save();
        return redirect('/empresa');
    }

    public function destroy($id)
    {
        $delEmpresa = Empresa::find($id);
        $delCompra = Compra::all();
        if(isset($delEmpresa) and isset($delCompra)) {
            foreach($delCompra as $del){
                $delId = $del->empresa_id;
                if($delId == $id){
                    $del->delete();
                }
            }
            $delEmpresa->delete();
        }
        return redirect('/empresa');
    }

    public function edit($id) 
    {
        $edit = Empresa::find($id);
        if(isset($edit)) {
            return view('editarEmpresa', compact('edit'));
        }
            return redirect('/empresa');
    }

    public function consulta($id) 
    {
        $list = Empresa::find($id);
        if(isset($list)) {
            return view('consultaEmpresa', compact('list'));
        }
        return redirect('/empresa');
    }

    public function update(Request $request, $id)
    {
        $edit = Empresa::find($id);
        if(isset($edit)) {
            $edit->nome = $request->input('nomeEmpresa');
            $edit->sigla = $request->input('sigla');
            $edit->preco = $request->input('preco');
            $edit->acoes = $request->input('acoes');
            $edit->descricao = $request->input('descricao');
            $edit->categoria = $request->input('categoria');
            $edit->save();
        }
        return redirect('/empresa');
    }
}
