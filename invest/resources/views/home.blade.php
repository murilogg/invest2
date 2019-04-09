@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-primary">
                <div class="card-header border-primary">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado !!!<br>
                    Não se esqueça de fazer um deposito primeiro
                </div>
@foreach($ids as $id)
                <div class="card-footer border-primary">
                    <a class="btn btn-primary btn-sm" role="button" href="/deposito/{{ $id->id }}">Fazer Deposito</a>
                </div>
@endforeach
            </div>
        </div>
    </div>
</div>
@endsection
