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
		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Criar Publicação</h3>
				<div class="post-project-fields">
                    <form action="/publicar" method="POST">
                    @csrf
						<div class="row">
							<div class="col-lg-12">
								<input type="text" id="titulo" name="titulo" placeholder="Título">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select name="classificacao">
										<option>Classificação</option>
										<option value="urgencia">Urgência</option>
										<option value="nao_urgencia">Não urgência</option>
									</select>
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
								<ul>
									<li><button class="active" type="submit" value="post">Publicar</button></li>
									<li><a href="#" title="">Voltar</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title="Fechar"><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->
        @endauth
    </div><!--theme-layout end-->
    @include('admin.includes.script')
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'})</script>
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

