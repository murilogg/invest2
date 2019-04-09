<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;


class ControladorEmpresa extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function telaPrincipal()
    {
        return view('index');
    }

    public function index()
    {
        $listar = Empresa::all();
        return view('empresa', compact('listar'));
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
        $novo->save();
        return redirect('/empresa');
    }

    public function destroy($id)
    {
        $delete = Empresa::find($id);
        if(isset($delete)) {
            $delete->delete();
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
