@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-7">
            <div class="card border border-primary">
                <div class="card-header border-primary"><b>Consulta Empresas</b></div>
@if(count($listar) > 0)
                <table class="table table-ordered table-hover"> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach($listar as $list)
                        <tr>
                            <td>{{ $list->id }}</td>
                            <td>{{ $list->nome }}</td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm">
                                    <a href="/empresa/consulta/{{$list->id}}">Detalhes</a>
                                </button>   
                                <button class="btn btn-outline-info btn-sm">
                                    <a style="color: info" href="/empresa/editar/{{ $list->id }}">Editar</a>
                                </button>
                                <button class="btn btn-outline-danger btn-sm">
                                    <a style="color: red" href="/empresa/delete/{{ $list->id }}">Apagar</a>
                                </button>
                            </td>
                        </tr>
    @endforeach
                    </tbody>
                </table>
@endif
                <div class="card-footer border-primary">
                    <a class="btn btn-primary btn-sm" role="button" href="/empresa/novo">Nova Empresa</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection