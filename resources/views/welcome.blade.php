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
								<span id="tituloError" style="color: red"></span>
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<br>
									<select id="classificacao" name="classificacao">
										<option selected>Classificação</option>
										<option value="urgencia">Urgência</option>
										<option value="nao_urgencia">Não urgência</option>
									</select>
									<span id="classificacaoError" style="color: red"></span>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="descricao" id="descricao" placeholder="Descrição"></textarea>
								<span id="descricaoError" style="color: red"></span>
							</div>
							<div class="col-lg-12">
								<!-- <input type="file" id="imagem" name="imagem" value="" placeholder=""> -->
							</div>
							<br>
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
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Faça a Sua Doação</h3>
				<div class="post-project-fields">
                    <form id="form-doacao">
						<div class="row">
							<div class="col-lg-12">
								<input type="text" id="textoDoacao" name="textoDoacao" placeholder="O que pretende doar">
								<span id="textoDoacaoError" style="color: red"></span>
							</div>
							<!-- <div class="col-lg-12">
								<div class="inp-field">
									<select name="categoria">
										<option>Categorias</option>
										<option value="urgencia">Produtos Alimenticios</option>
										<option value="nao_urgencia">Roupas</option>
									</select>
								</div>
							</div> -->
							<div class="col-lg-12">
								<br>
								<input type="number" id="quantidade" name="quantidade" placeholder="Quantidade do item">
								<input type="hidden" id="instId" name="instId" value="">
								<span id="qtdDoacaoError" style="color: red"></span>
							</div>
							<div class="col-lg-12">
								<br>
								<ul>
									<li><button class="active" id="doar" type="submit">Doar</button></li>
									<li><a href="#" title="">Voltar</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title="Fechar"><i class="la la-times-circle-o"></i></a>
			</div>
		</div>
        @endauth
	<!--theme-layout end-->
	@include('admin.includes.script')

	<script>
		$('#publicar').on('click', function(element){
			element.preventDefault();

			let titulo =  $('#titulo').val()
			let classificacao =  $('#classificacao').val()
			let descricao =  $('#descricao').val()
				// let imagem =  $('#imagem').val()
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

					if(response.mensagem){
					    toastr.success(response.mensagem, 'Publicar!', { "showMethod": "slideDown", "hideMethod": "slideUp", 
					        timeOut: 5000, onHidden: function () {
					            window.location.reload();
					        } 
						});
					}else { 
						$('#tituloError').text(response.erro[0]);
						$('#descricaoError').text(response.erro[1]);

					    toastr.error('Por favor corriga os erros do Formulario', 'Erro ao publicar!', { "timeOut": 5000 });
					}
				}
			});
		});
	</script>
	<script>
		$('#doar').on('click', function(element){

			element.preventDefault();

			let textoDoacao =  $('#textoDoacao').val();
			let quantidade =  $('#quantidade').val();
			let instId =  $('#instId').val();
			let _token =   $('meta[name="csrf-token"]').attr('content');
				
			console.log(textoDoacao, instId, quantidade, _token);

			$.ajax({
				url: "/doacao", 
				type: "POST",
				data: {
					textoDoacao: textoDoacao,
					quantidade: quantidade,
					instId: instId,
					_token: _token
				},
				dataType: "json",
				success: function(response) {

					console.log('Dar res: ', response);

					if(response.mensagem && response.dados){
					    toastr.success(response.mensagem, 'Doação!', { "showMethod": "slideDown", "hideMethod": "slideUp", 
					        timeOut: 5000, onHidden: function () {
					            window.location.reload();
					        }  
						});

					}else {   
						$('#textoDoacaoError').text(response.erro[0]);
						$('#qtdDoacaoError').text(response.erro[1]);

					    toastr.error('Por favor corriga os erros do Formulario', 'Erro ao publicar!', { "timeOut": 5000 });
					}
				}
			});
		});
		
		//PEGAR O ID DA INSTITUIÇÃO
		$('.com').on('click', function(element){
			$('#instId').val(element.currentTarget.getAttribute('id'));
		})
	</script>
</body>
<script>
	'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) 
</script>
<script src='assets/img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

</html>