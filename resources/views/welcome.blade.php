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
								@isset($sectionLeft)
									@include($sectionLeft)
								@endisset
                            @endauth
                            @include($corpo)
                            @guest
                                @include('admin.includes.sectionRigth')
                            @endguest
                        </div>
                    </div><!-- main-section-data end-->
                </div> 
            </div>
        </main>

		@auth
		{{-- MODAL DA INSTITUIÇÃO --}}
		<div class="post-popup post-popupi job_post">
			<div class="post-project">
				<h3>Doação</h3>
				<div class="post-project-fields">
					<form id="form-publicacao">

						<div class="row">
							<div class="col-lg-12">
								<input type="text" class="text-ligth" id="titulo" name="titulo" placeholder="Título">
								<span id="tituloError" style="color: red"></span>
							</div>
							<div class="col-lg-12">
								<div class="inp-field inst">
									<br>
									<select class="text-ligth" id="classificacao" name="classificacao">
										<option selected>Selecione uma Necessidade</option>
										<option class="alimentos" value="Produtos Alimenticios">Produtos Alimenticios</option>
										<option value="Produtos de Higiene">Produtos de Higiene</option>
										<option value="Medicamentos">Medicamentos</option>
										<option value="Electrodomésticos">Electrodomésticos</option>
										<option value="Roupas">Roupas</option>
									</select>
									<span id="classificacaoError" style="color: red"></span>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="file" name="file" onchange="previewFile(this)">
								<img id="previewImg" style="max-width:250px; margin-top:10px;" />
							</div>
							<div class="col-lg-12">
								<textarea name="texto" placeholder="Descrição" ></textarea>
							</div>
							<div class="col-lg-12">
								<!-- <input type="file" id="imagem" name="imagem" value="" placeholder=""> -->
							</div>
							<br>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" id="publicar" type="submit" value="post">Publicar</button></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<!--post-project-fields end-->
				<a href="#" title="Fechar"><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		{{-- MODAL PARA DOAR --}}
		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Ajude com a sua doação - <span style="font-weight: bold" id="nome"></span></h3>
				
				<div class="post-project-fields">
                    <form id="form-doacao">
						<div class="row">
							<div class="col-lg-12">
								<input type="text" id="textoDoacao" name="textoDoacao" placeholder="O que pretende doar">
								<span id="textoDoacaoError" style="color: red"></span>
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select name="categoria">
										<option>Categorias</option>
										<option value="urgencia">Produtos Alimenticios</option>
										<option value="nao_urgencia">Roupas</option>
									</select>
								</div>
							</div>
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
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title="Fechar"><i class="la la-times-circle-o"></i></a>
			</div>
		</div>

		{{-- MODAL DO DOADOR --}}
		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Doe um item para ajudar as pessoas</h3>
				<div class="post-project-fields">
					<form id="form-doador">

						<div class="row">
							<div class="col-lg-12">
								<input type="text" class="text-ligth" id="titulo_doacao" name="titulo_doacao" placeholder="Título do item que pretende doar">
								<span id="titulo_doacao_erro" style="color: red"></span>
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select class="text-ligth" id="categoria_doacao" name="categoria_doacao">
										<option selected>Escolha uma categoria</option>
										<option class="alimentos" value="Produtos Alimenticios">Alimentos</option>
										<option class="alimentos" value="Produtos Alimenticios">Produtos Enlatados</option>
										<option value="Produtos de Higiene">Produtos de Higiene</option>
										<option value="Medicamentos">Medicamentos</option>
										<option value="Electrodomésticos">Electrodomésticos</option>
										<option value="Roupas">Roupas</option>
									</select>
									<span id="categoria_doacao_erro" style="color: red"></span>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 data_validade">
									<span class="data text-muted">Data de Validade</span>
									<br>
									<input type="date" id="data_expitacao" name="data_expitacao">
								</div>
								<div class="col-lg-6">
									<br>
									<input type="number" id="quantidade_doacao" name="quantidade_doacao" placeholder="Quantidade do item">
									<span id="quantidade_doacao_erro" style="color: red"></span>
								</div>
							</div>
							<div class="col-lg-12 estado_pergunta">
								<br>
								<span class="estado_p text-muted">Em que estado se encontra o item?</span> <br>
								<input class="text-muted" type="radio" name="estado" id="muito_bom_estado" value="Muito bom estado">
								<span class="text-muted" for="muito_bom_estado">Muito bom estado</span><img src="assets/images/star.svg" height="18px">

								<input class="text-muted" type="radio" name="estado" id="boa_condicao" value="Boa condição">
								<span class="text-muted" for="boa_condicao">Boa condição</span><img src="assets/images/star4.svg" height="18px">

								<input class="text-muted" type="radio" name="estado" id="condicao_intermediaria" value="Condição intermediária">
								<span class="text-muted" for="condicao_intermediaria">Condição intermediária</span><img src="assets/images/star2.svg" height="18px">

								<input class="text-muted" type="radio" name="estado" id="condição_ruim" value="Condição ruim">
								<span class="text-muted" for="condição_ruim">Condição ruim</span><img src="assets/images/star3.svg" height="18px">

								<span id="estado_erro" style="color: red"></span>
							</div>
							<div class="col-lg-12 estado_local">
								<br> <br>
								<span class="estado_l text-muted">Local de doação</span>
								<img src="assets/images/placeholder.svg">
								<input type="text" id="local_doacao" name="local_doacao" placeholder="Ex: Provincia: Luanda - kilamba kiaxi, bairro palanca, rua f1, casa nº 23">
							</div>
							<div class="col-lg-12">
								<textarea class="text-dark" name="descricao_doacao" id="descricao_doacao" placeholder="Descreve detalhadamente o item que quer doar"></textarea>
								<span id="descricao_doacao_erro" style="color: red"></span>
							</div>
							<div class="col-lg-12">
								<input type="file" id="imagem" name="imagem" value="" placeholder="selecione a imagem do item">
							</div>
							<br>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" id="Doar" type="submit" value="post">Doar</button></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<!--post-project-fields end-->
				<a href="#" title="Fechar"><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div>
        @endauth
	<!--theme-layout end-->
	{{-- @include('admin.includes.script') --}}
	<script>
		$(function () {
			$('.alimentos').css('background-image', 'url(assets/images/vegetable.svg)');
			$('.alimentos').css('visibility', 'visible');
		});
	</script>
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
			$('#nome').text(element.currentTarget.getAttribute('nomeInst'));
		})
	</script>
</body>
<script>
	'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) 
</script>
<script src='assets/img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

<script>
function previewFile(input){
	var file=$("input[type=file]").get(0).files[0];
	if(file){
		var reader = new FileReader();
		reader.onload = function(){
			$('#previewImg').attr("src",reader.result);
		}
		reader.readAsDataURL(file);
	}
}
</script>
</html>