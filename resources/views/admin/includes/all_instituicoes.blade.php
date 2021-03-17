<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>Todas Instituições</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">
                        @foreach( $dados as $dado)
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="assets/images/resources/cmp-icon.png" alt="">
									<h3>{{$dado->nome_instituicao}}</h3>
									<h4>Establish Feb, 2004</h4>
									<ul>
										<li><a href="#" title="" class="follow">Follow</a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
								<a href="#" title="" class="view-more-pro">Ver Perfil</a>
							</div><!--company_profile_info end-->
						</div>
                        @endforeach
					</div>
				</div><!--companies-list end-->
				<div class="process-comm">
					<div class="spinner">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>
				</div><!--process-comm end-->
			</div>
		</section><!--companies-info end-->