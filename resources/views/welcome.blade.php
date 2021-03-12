<!DOCTYPE html>
<html>

<head>
	@include('admin.includes.head')
</head>

<body oncontextmenu="return false;">
	<div class="wrapper">
		@include('admin.includes.navbarSite')
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							@auth
							@include('admin.includes.sectionLeft')
							@endauth
							@include('admin.includes.feedSite')
							@guest
							@include('admin.includes.sectionRigth')
							@endguest
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>

		@auth
		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Criar Publicação</h3>
				<div class="post-project-fields">
					<form id="form-publicacao">

						<div class="row">
							<div class="col-lg-12">
								<input type="text" id="titulo" name="titulo" placeholder="Título">
								<span id="tituloError" class="alert-message"></span>
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select id="classificacao" name="classificacao">
										<option selected>Classificação</option>
										<option value="urgencia">Urgência</option>
										<option value="nao_urgencia">Não urgência</option>
									</select>
									<span id="classificacaoError" class="alert-message"></span>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="descricao" id="descricao" placeholder="Descrição"></textarea>
								<span id="descricaoError" class="alert-message"></span>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" id="publicar" type="submit"
											value="post">Publicar</button></li>
									<li><a href="#" title="">Voltar</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<!--post-project-fields end-->
				<a href="#" title="Fechar"><i class="la la-times-circle-o"></i></a>
			</div>
			<!--post-project end-->
		</div>
		<!--post-project-popup end-->

		@endauth
	</div>
	<!--theme-layout end-->
	@include('admin.includes.script')

	<script>
		$('#publicar').on('click', function(element){
				element.preventDefault();

				let titulo =  $('#titulo').val()
				let classificacao =  $('#classificacao').val()
				let descricao =  $('#descricao').val()
				let _token =   $('meta[name="csrf-token"]').attr('content')
				
				console.log(titulo, classificacao, descricao, _token);

				$.ajax({
						url: "/publicar",
						type: "POST",
						data: {
							titulo: titulo,
							classificacao: classificacao,
							descricao: descricao,
							_token: _token
						},
						dataType: "json",
						success: function(response) {

							console.log('Dar res: ', response);

			// 				// if(response.dar === 1 && response.dar != undefined){
							    toastr.success(response.mensagem, 'Publicacão!', { "showMethod": "slideDown", "hideMethod": "slideUp", 
							        timeOut: 1000, onHidden: function () {
							            window.location.reload();
							        } 
								});
			// 				// }else {
			// 				//     toastr.error(response.mensagem, 'Erro!', { "timeOut": 5000 });
			// 				// }
						},
						error: function(response) {
						// console.log("createPost ~ response", response.responseText)
						
						let erros = response.responseText
						let erro = {
							"message":"The given data was invalid.",
							"errors":{
								"titulo":["O campo titulo é obrigatrio."],
								"descricao":["O campo descricao é obrigatorio."]
								}
							}
						
						
						console.log("createPost", erros)
						// console.log("createPost", erros["errors"]["titulo"])
						// console.log("createPost", erros["errors"]["descricao"])
						
						//   $('#tituloError').text(response.responseText);
							// $('#classificacaoError').text(response.responseJSON.errors.classificacao);
							// $('#descricaoError').text(response.responseJSON.errors.descricao);
						}
					});
			});
	</script>
</body>
<script>
	'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'})
</script>
<script src='assets/img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

</html>