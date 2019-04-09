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
					<form action="/empresa/{{ $edit->id }}" method="POST">
			    	@csrf
					<div class="form-row">
    					<div class="form-group col-md-4">
							<label for="nomeInstituicao">Nome da Instituição</label>
							<input type="text" class="form-control" id="nomeInstituicao"  required name="nomeEmpresa" value="{{$edit->nome}}" placeholder="exe. BRADESCO">
						</div>
						<div class="form-group col-md-2">
							<label for="sigla">Sigla</label>
							<input type="text" class="form-control" id="sigla" required name="sigla" value="{{$edit->sigla}}" placeholder="exe. BRAP4.SA">
						</div>
						<div class="form-group col-md-3">
							<label for="preco">Preço das ações</label>
							<input step=0.001 type="number"  class="form-control" id="preco" required max="99999.999"  name="preco" value="{{$edit->preco}}" placeholder="exe. 30,948">
						</div>
						<div class="form-group col-md-3">
							<label for="acoes">Quantidade de Ações</label>
							<input type="float" class="form-control" id="acoes" required min="1" name="acoes" value="{{$edit->acoes}}" placeholder="exe. 2000">
						</div>
					</div>
					<div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="descricao">Descrisão</label>
                            <input type="text" class="form-control" id="descricao" required name="descricao" value="{{$edit->descricao}}" placeholder="exe. Imobiliária">
                        </div>
                        <div class="form-group col-md-3">
							<label for="categoria">Categorias</label>
                            <select id="categoria" required name="categoria" class="form-control">
									<option>{{ $edit->categoria }}</option>
									<option value="Ordinária">Ação Ordinária</option>
							    	<option value="Preferencial">Ação Preferencial</option>
								    <option value="EX">Ação EX</option>
								    <option value="Nominativa">Ação Nominativa</option>
								    <option value="Escritural">Ação Escritural</option>
							</select>
                        </div>
                    </div>								
			 	    <button type="submit" class="btn btn-primary btn-md">Salvar</button>
			 		<button type="cancel" class="btn btn-danger btn-md"><a href="/empresa" style="color: white;">Cancelar</a></button>
		 		</form>
		 	</div>
		</div>
	</div>
</div>

@endsection