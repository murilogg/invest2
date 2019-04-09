@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card border border-primary">
            <div class="card-header border-primary"><b>Consultando {{ $list->nome }}</b></div>
                <table class="table table-ordered table-hover"> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sigla</th>
                            <th>Preço das Ações</th>
                            <th>Ações</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $list->id }}</td>
                            <td>{{ $list->nome }}</td>
                            <td>{{ $list->sigla}}</td>
                            <td>R$ {{ $list->preco}}</td>
                            <td>{{ $list->acoes}}</td>
                            <td>{{ $list->descricao}}</td>
                            <td>{{ $list->categoria}}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-footer border-primary">
                    <a class="btn btn-primary btn-sm" role="button" href="/empresa/novo">Nova Empresa</a>
                    <a class="btn btn-primary btn-sm" role="button" href="/empresa">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection