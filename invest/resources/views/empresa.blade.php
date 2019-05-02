@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-7">
            <div class="card border border-primary">
                <div class="card-header border-primary" style="background-color: skyblue"><b>Consulta Empresas</b></div>
                <table class="table table-ordered table-hover"> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
@if(isset($listar))
    @foreach($listar as $list)
        @if(auth()->id() == $list->user_id)
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
                                    <a style="color: red" href="/empresa/{{ $list->id }}">Apagar</a>
                                </button>
                            </td>
                        </tr>
        @endif
    @endforeach
@endif
                    </tbody>
                </table>
                <div class="card-footer border-primary">
                    <a class="btn btn-primary btn-sm" role="button" href="/empresa/novo">Nova Empresa</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection