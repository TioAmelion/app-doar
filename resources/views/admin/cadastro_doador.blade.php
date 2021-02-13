@extends('admin.layout')

@section('conteudo')	

<div class="col-lg-6 col-md-8 no-pd">
	<div class="main-ws-sec">
		<div class="post-topbar">
			<h3 class="display-4 font-weight-bold">Cadastre-se e comece já a sua campanha!</h3>
			<form action="/doador" method="POST">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-12">
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
					</div>
					
					<div class="form-group col-md-8">
						<input type="email" class="form-control" id="email" placeholder="Email" name="email">
					</div>
					<div class="form-group col-md-4">
						<input type="tel" class="form-control" id="telemovel" name="telemovel" placeholder="Telemóvel">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-4">
						<input type="text" class="form-control" id="nif" name="nif" placeholder="NIF">
					</div>
					<div class="form-group col-sm-4">
						<input type="date" class="form-control" name="data_nasc" id="data_nasc">
					</div>
					<div class="form-group col-md-4">
						<input type="text" class="form-control" id="caixa_postal" placeholder="Caixa Postal">
					</div>
				  <div class="form-group col-md-auto">
					<input type="text" class="form-control" id="provincia" name="provincia" placeholder="Província">
				  </div>
				  <div class="form-group col-md-auto">
					<input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
				  </div>
				  <div class="form-group col-md-auto">
					<input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
				  </div>
				  
				</div>
				  
				<a class="btn btn-danger">Voltar</a>
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			  </form>
		</div><!--post-topbar end-->
	</div><!--main-ws-sec end-->
</div>

@endsection