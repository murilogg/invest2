@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="container col-md-8 offset-md-2">
    	<div class="card border border-primary">
		 	<div class="card-header border-primary nv-background">
		 		<div class="card-title">
		 			<b>EMPRESAS</b>
		 		</div>
		 	</div>
		 	<div class="card-body">
		 		<form action="/empresa" method="POST">
			    	@csrf
					<div class="form-row">
    					<div class="form-group col-md-4">
							<label for="nomeInstituicao">Nome da Instituição.</label>
							<input required type="text" class="form-control" id="nomeInstituicao" name="nomeEmpresa" placeholder="exe. BRADESCO">
						</div>
						<div class="form-group col-md-2">
							<label for="sigla">Sigla.</label>
							<input required type="text" class="form-control" id="sigla" name="sigla" placeholder="exe. BRAP4.SA">
						</div>
						<div class="form-group col-md-3">
							<label for="preco">Preço das ações.</label>
							<input required type="number" step=0.001 class="form-control" id="preco" max="99999.999" name="preco" placeholder="exe. 30.948">
						</div>
						<div class="form-group col-md-3">
							<label for="acoes">Quantidade de Ações.</label>
							<input type="number" step=00.000,000 class="form-control" id="acoes" name="acoes" required min="1" placeholder="exe. 2000">
						</div>
					</div>
					<div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="descricao">Descrisão.</label>
                            <input required type="text" class="form-control" id="descricao" name="descricao" placeholder="exe. Anotações importantes">
						</div>
						<div class="form-group col-md-3">
							<label for="categoria">Categoria:</label>
							<select id="categoria" required name="categoria" class="form-control">
							    <option selected required></option>
								<option value="Alimentos">Alimentos</option>
								<option value="Banco">Banco</option>
								<option value="Mineirio">Mineirio</option>
								<option value="Petroleo">Petroleo</option>
								<option value="Ouro">Ouro</option>
							</select>
						</div>
					</div>
					<hr>								
			 	    <button type="submit" class="btn btn-primary btn-md">Salvar</button>
			 		<button type="cancel" class="btn btn-danger btn-md"><a href="/index" style="color: white;">Cancelar</a></button>
		 		</form>
		 	</div>
		</div>
	</div>
</div>

@endsection