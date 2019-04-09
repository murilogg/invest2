@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card border border-primary">
                <div class="card-header border-primary"><h4><b>Cotações</b></h4></div>
                
@if(count($list) > 0)
                
                <table class="table table-ordered table-hover"> 
                    <thead>
                        <tr>
                            <th><h5>ID</h5></th>
                            <th><h5>Nome</h5></th>
                            <th><h5>Sigla</h5></th>
                            <th><h5>Categoria</h5></th>
                            <th><h5>Anotações</h5></th>
                            <th><h5>Preço</h5></th>
                            <th><h5>Ações</h5></th>
                            <th><h5>Opções</h5></th>                          
                        </tr>
                    </thead>
                    <tbody>
    @foreach($list as $lis)
                    <form action="/cotacoes/{{ $lis->id }}/{{ $lis->preco }}" method="POST">
                        @csrf
                        <tr>
                            <td>{{ $lis->id }}</td>
                            <td>{{ $lis->nome }}</td>
                            <td>{{ $lis->sigla }}</td>
                            <td>{{ $lis->categoria}}</td>
                            <td>{{ $lis->descricao }}</td>
                            <td style="color: green"><b>R$ {{ $lis->preco }}</b></td>
                            <td style="color: blue"><b>{{ $lis->acoes }}</b></td>
                            <td>
                            <div class="form-row">
                                <select id="categoria" style="width:170px;" name="categoria" class="form-control">
                                    <option selected required></option>
                                    <option value="Ordinária">Ação Ordinária</option>
                                    <option value="Preferencial">Ação Preferencial</option>
                                    <option value="EX">Ação EX</option>
                                    <option value="Nominativa">Ação Nominativa</option>
                                    <option value="Escritural">Ação Escritural</option>
                                </select>
                                <input type="number" style="width:80px;" min="1" max="{{$lis->acoes}}" name="quantidade" class="form-control">
                                <button type="submit" class="btn btn-outline-info btn-sm">Comprar</button>
                            </div>
                            </td>
                        </tr>
                    </form>
    @endforeach
                    </tbody>
                </table>
@endif
                </form>
                <div class="card-footer border-primary">
                    <a class="btn btn-primary btn-sm" role="button" href="/empresa/novo">Nova Empresa</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection