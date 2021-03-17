@if(Auth::check())
	<div class="col-lg-6 col-md-6 no-pd">
@else
	<div class="col-lg-7 col-md-6 mx-auto">
@endif
	<div class="main-ws-sec">
		@auth
		<div class="post-topbar">
			<div class="user-picy">
				<img src="assets/images/resources/user-pic.png" alt="">
			</div>
			
			<div class="post-st">
				<ul>
					<li><a class="post-jb active" href="#" title="">Em que estás a pensar, {{Auth::user()->name}}?</a></li>
				</ul>
			</div><!--post-st end-->
			
		</div><!--post-topbar end-->
		@endauth
		<div class="posts-section">
			@foreach($pub as $dados)
			<div class="post-bar">
				<div class="post_topbar">
					<div class="usy-dt">
						<img src="assets/images/resources/us-pic.png" alt="">
						<div class="usy-name">
							<h3>{{$dados->name}}</h3>
							<span><img src="assets/images/clock.png" alt="">3 min ago</span>
						</div>
					</div>
					<div class="ed-opts">
						<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
						<ul class="ed-options">
							<li><a href="#" title="">Edit Post</a></li>
							<li><a href="#" title="">Unsaved</a></li>
							<li><a href="#" title="">Unbid</a></li>
							<li><a href="#" title="">Close</a></li>
							<li><a href="#" title="">Hide</a></li>
						</ul>
					</div>
				</div>
				<div class="epi-sec">
					<ul class="descp">
						<li><img src="images/icon8.png" alt=""><span>India</span></li>
					</ul>
					<ul class="bk-links">
						<!-- <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
						<li><a href="#" title=""><i class="la la-envelope"></i></a></li> -->
					</ul>
				</div>
				<div class="job_descp">
					<h3>{{$dados->titulo}}</h3>
					<ul class="job-dt">
						<!-- <li><a href="#" title="">Full Time</a></li> -->
						<!-- <li><span>$30 / hr</span></li> -->
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... 
					<a href="#" title="">ver mais</a></p>
				</div>
				<div class="job-status-bar">
					<ul class="like-com">
						<li>
							<a href="#"><i class="la la-heart"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</a>
							<span>25</span>
						</li> 
						<li><a href="#" title="" class="com"><img src="assets/images/com.png" alt=""> Commentarios 15</a></li>
					</ul>
					<a><i class="la la-eye"></i>Visualizou 50</a>
				</div>
			</div><!--post-bar end-->
			@endforeach
			<div class="top-profiles">
				<div class="pf-hd" style="background-color: white">
					<h3>Instituições Precisando de Ajuda</h3>
					<i class="la la-ellipsis-v"></i>
				</div>
				<div class="profiles-slider">
					<div class="user-profy">
						<img src="images/resources/user1.png" alt="">
						<h3>Lar do Beiral</h3>
						<span>Lar de Idosos</span>
						<ul>
							<li><a href="#" title="" class="followw">Doar</a></li>
							
						</ul>
						<a href="#" title="">Ver mais</a>
					</div><!--user-profy end-->
					<div class="user-profy">
						<img src="images/resources/user2.png" alt="">
						<h3>Centro ABC</h3>
						<span>Centro de acolhimento</span>
						<ul>
							<li><a href="#" title="" class="followw">Doar</a></li>
							</ul>
						<a href="#" title="">Ver mais</a>
					</div><!--user-profy end-->
					<div class="user-profy">
						<img src="images/resources/user3.png" alt="">
						<h3>Centro Infantil</h3>
						<span>Centro de acolhimento</span>
						<ul>
							<li><a href="#" title="" class="followw">Doar</a></li>
							</ul>
						<a href="#" title="">Ver mais</a>
					</div><!--user-profy end-->
					<div class="user-profy">
						<img src="images/resources/user1.png" alt="">
						<h3>Centro de Viana</h3>
						<span>Centro de acolhimento</span>
						<ul>
							<li><a href="#" title="" class="followw">Doar</a></li>
							</ul>
						<a href="#" title="">Ver mais</a>
					</div><!--user-profy end-->
					
				</div><!--profiles-slider end-->
			</div><!--top-profiles end-->
			<div class="posty">
				
			</div><!--posty end-->
			<div class="process-comm">
				<div class="spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
			</div><!--process-comm end-->
		</div><!--posts-section end-->
	</div><!--main-ws-sec end-->
</div>