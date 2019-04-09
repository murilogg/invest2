@extends('layouts.app')

@section('content')

<div class="jumbotron col-md-10 offset-md-1 bg-sucess border border-info">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title"><b>Cadastro de Empresas</b></h5>
                    <p class="card=text">
                        Aqui você cadastra suas empresas.
                    </p>
                    <a href="/empresa/novo" class="btn btn-primary">Cadastro</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title"><b>Fazer Transações</b></h5>
                    <p class="card=text">
                        Aqui você realiza o investimento ou resgate,<br>
                        Lembre-se de primeiro cadastrar as empresas.
                    </p>
                    <a href="/cotacoes" class="btn btn-primary">Comprar</a>
                    <a href="/carteira" class="btn btn-primary">Vender</a>
                </div>
            </div>            
        </div>
</div>

@endsection