@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border border-sucess">
                <div class="card-header border-primary"><b>Dashboard - Você está logado !!!</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="card-deck">
                            <div class="card border border-sucess" style="background-color: skyblue">
                                <div class="card-body">
                                    <h6 class="card-title"><b>Cadastro de Empresas</b></h6>
                                    <p class="card=text">
                                        Aqui você cadastra suas empresas.
                                    </p>
                                    <a href="/empresa/novo" class="btn btn-primary">Cadastro</a>
                                </div>
                            </div>
                            <div class="card border border-sucess" style="background-color: skyblue">
                                <div class="card-body">
                                    <h6 class="card-title"><b>Fazer Transações</b></h6>
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
                <div class="card-footer border-primary">
                    <a class="btn btn-outline-primary btn-sm" role="button" href="/deposito">Fazer Deposito</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
