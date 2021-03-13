<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="#" title=""><img src="assets/images/logo.png" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="pesquisar...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="/" title="">
									<span><img src="assets/images/icon1.png" alt=""></span>
									Home
								</a>
							</li>
							<li>
								<a href="/instituicoes" title="">
									<span><img src="assets/images/icon2.png" alt=""></span>
									Instituições
								</a>
								<ul>
									<li><a href="#" title="">Lares</a></li>
									<li><a href="assets/company-profile.html" title="">Centros</a></li>
								</ul> 
							</li>
							<li>
								<a href="#" title="">
									<span><img src="assets/images/icon3.png" alt=""></span>
									Doadores
								</a>
							</li>
							<li>
								<a href="#" title="">
									<span><img src="assets/images/icon4.png" alt=""></span>
									Fornecedores
								</a>
							</li>
							@auth
								<li>
								</li>
							@else
								<li>
									<a href="{{ route('login') }}" title="">
										<span><img src="assets/images/icon4.png" alt=""></span>
										Login
									</a>
								</li>
							@endauth
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					@auth
						<div class="user-account">
						<div class="user-info">
							<img src="assets/images/resources/user.png" alt="">
							<a href="#" title="">{{ Auth::user()->name}}</a>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss">
							<ul class="us-links">
								<li><a href="#" title="">Account Setting</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Terms & Conditions</a></li>
							</ul>
                        <!-- Authentication -->
						<h3 class="tc"><a href="/logout" title="">Sair</a></h3>
						</div><!--user-account-settingss end-->
					</div>
					@endauth
				</div><!--header-data end-->
			</div>
		</header>