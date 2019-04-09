@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="container col-md-8 offset-md-2">
    	<div class="card border border-primary">
		 	<div class="card-header  border-primary">
		 		<div class="card-title">
		 			<b>RESGATE</b>
		 		</div>
		 	</div>
		 	<div class="card-body">
		 		<form action="/empresa" method="POST">
			    	@csrf
					<div class="form-row">
    					<div class="form-group col-md-6">
							<label for="nomeInstituicao">Nome da Instituição</label>
							<input type="text" class="form-control" id="nomeInstituicao" name="nomeEmpresa" placeholder="exe. BRADESCO">
						</div>
						<div class="form-group col-md-6">
							<label for="sigla">Sigla</label>
							<input type="text" class="form-control" id="sigla" name="sigla" placeholder="exe. BRAP4.SA">
						</div>
					</div>
					<div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="exe. Imobiliária">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="categoria">Categorias</label>
                            <select id="categoria" name="categoria" class="form-control">
                                <option selected>Tipo...</option>
                                <option value="imobiliaria">Imobiliária</option>
                            </select>
                        </div>
                    </div>								
			 	    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
			 		<button type="cancel" class="btn btn-danger btn-sm" href="/index">Cancelar</button>
		 		</form>
		 	</div>
		</div>
	</div>
</div>

@endsection