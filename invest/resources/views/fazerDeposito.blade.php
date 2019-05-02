@extends('layouts.app')

@section('content')

<div class="container">
	<div class="container col-md-4 offset-md-4">
    <div class="card border border-primary">
		 	<div class="card-header border-primary nv-background">
		 		<div class="card-title">
				 <b>SALDO R$: {{$edit->saldo}}</b>
			  </div>
		 	</div>
		 	<div class="card-body">
			  <form action="/deposito/{{ $edit->id }}" method="POST">
			  @csrf
			  	<div class="form-row">
    		    <div class="form-group col-md-11">
					    <label for="deposito">Quantia R$ </label>
					    <input type="number" step=0.001 class="form-control" id="deposito" name="deposito" placeholder="exe. 2000">
				    </div>
			    </div>							
			    <button type="submit" class="btn btn-primary btn-md">Depositar</button>
			    <button type="cancel" class="btn btn-danger btn-md"><a href="/" style="color: white;">Cancelar</a></button>
		    </form>
		 	</div>
		</div>
	</div>
</div>

@endsection