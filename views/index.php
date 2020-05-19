<?php echo \Classes\ClassLayout::setHeader('Homepage', "", ""); ?>

	<!--APRESENTAÇÃO-->
	<div data-spy="scroll" data-target="#navbar-example2" class="scrollspy-example z-depth-1 mt-4" data-offset="0">
		<h4 id="carousel_home"></h4>

		<main role="main">

		<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg">
				<div class="container">
				<div class="carousel-caption text-left">
					<h1>Example headline.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
				</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg">
				<div class="container">
				<div class="carousel-caption">
					<h1>Another example headline.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg">
				<div class="container">
				<div class="carousel-caption text-right">
					<h1>One more for good measure.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
				</div>
				</div>
			</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div class="container ">
		<div class="row apresentacao">
			
			<!-- FOTO APRESENTAÇÃO-->
			<div class="col-md-5">
				<div class="view view-cascade overlay">
					<img src="https://mdbootstrap.com/img/Photos/Others/men.jpg" class="card-img-top" alt="normal">
					<a>
					<div class="mask rgba-white-slight"></div>
					</a>
				</div>
				<br>
			</div>

				<!-- TEXTO APRESENTAÇÃO-->
			<div class="col-md-6 col-sm-12 " id="navbar-example2-mdo">
				<h3 class="text-lg-center">Nome do autor:</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>			
		</div>		
	</div>

	<!--DEPOIMENTOS-->
	<div class="container-fluid my-5 px-5 pt-5 pb-3 depoimentos " style="background-color: #E8E7E7; height: 440px;">
	
		<div class="d-flex justify-content-center">
			<h3 id="navbar-example2-two " class="font-weight-bold text-center dark-grey-text pb-2">Depoimentos</h3>
		</div>

		<!--Section: Content-->
		<section class="text-center dark-grey-text">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-12 mb-4">

					<div class="wrapper-carousel-fix">
					
						<!-- Carousel Wrapper -->
						<div id="myCarousel1" class="carousel no-flex testimonial-carousel slide" data-ride="carousel"
							data-interval="false" style="height: 340px!important;">
							<ol class="carousel-indicators" style="padding-top: -200px !important; padding-bottom: 10px;">
								<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel1" data-slide-to="1"></li>
								<li data-target="#myCarousel1" data-slide-to="2"></li>
							</ol>
							<!--Slides-->
							<div class="carousel-inner" role="listbox">
							<!--First slide-->
							<div class="carousel-item active">
								<div class="view card-img-64 mx-auto mt-5 mb-4">
								<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" class="rounded-circle img-fluid" alt="smaple image">
								</div>
								<p class="text-muted">- Anna Morian</p>

								<p class="lead font-italic container texto_depoimento" >"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, voluptas nostrum quisquam!"</p>
								
							</div>
							<!--First slide-->
							<!--Second slide-->
							<div class="carousel-item">
								<div class="view card-img-64 mx-auto mt-5 mb-4">
								<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle img-fluid" alt="smaple image">
								</div>
								<p class="text-muted">- Teresa May</p>

								<p class="lead font-italic container texto_depoimento">"Neque cupiditate assumenda in maiores repudiandae mollitia adipisci maiores repudiandae mollitia consectetur adipisicing architecto elit sed adipiscing elit."</p>
							
							</div>
							<!--Second slide-->
							<!--Third slide-->
							<div class="carousel-item">

								<div class="view card-img-64 mx-auto mt-5 mb-4">
								<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid" alt="smaple image">
								</div>
								<p class="text-muted">- Kate Allise</p>
								<p class="lead font-italic container texto_depoimento">"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur est laborum neque cupiditate assumenda in maiores."</p>
							
							</div>
							<!--Third slide-->
							</div>
							<!--Slides-->
							<!--Controls-->
							<a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
							data-slide="prev">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
							data-slide="next">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
							</a>
							<!--Controls-->
						</div>
						
					
					</div>
					
				</div>
			

			</div>
			
			
		</section>
		
	</div>     

	<!--PLANOS-->
	<div class="container my-2">
     	<h4 id="navbar-example2-three"></h4>

		<section class="text-center dark-grey-text">

			<!-- Section heading -->
			<h3 class="font-weight-bold pb-2 mb-4">Our pricing plans</h3>
			<!-- Section description -->
			<p class="text-muted w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

		
			<div class="row">

			
				<div class="col-lg-4 col-md-12 mb-4">

					<!-- Card -->
					<div class="card">

					<!-- Content -->
					<div class="card-body">
						
						<h5 class="mb-4">Basic plan</h5>
						<div class="d-flex justify-content-center">
							<div class="card-circle d-flex justify-content-center align-items-center">
								<i class="fas fa-home indigo-text"></i>
							</div>
						</div>

						
						<h2 class="font-weight-bold my-4">59$</h2>
						<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id
						nobis accusamus deleniti cumque hic laborum.</p>
						<a class="btn btn-indigo btn-rounded">Buy now</a>

					</div>
					

				</div>
					

			</div>
		

			<div class="col-lg-4 col-md-6 mb-4">

				<!-- Card -->
				<div class="card indigo">

					<!-- Content -->
					<div class="card-body white-text">

						<!-- Offer -->
						<h5 class="mb-4">Premium plan</h5>
						<div class="d-flex justify-content-center">
						<div class="card-circle d-flex justify-content-center align-items-center">
							<i class="fas fa-users"></i>
						</div>
						</div>

						<!--Price -->
						<h2 class="font-weight-bold my-4">79$</h2>
						<p>Esse corporis saepe laudantium velit adipisci cumque iste ratione facere non distinctio cupiditate
						sequi atque.</p>
						<a class="btn btn-outline-white btn-rounded">Buy now</a>
					</div>
				</div>
			</div>
		

			<div class="col-lg-4 col-md-6 mb-4">	
				<div class="card">	
					<div class="card-body">
		
						<h5 class="mb-4">Advanced plan</h5>
						<div class="d-flex justify-content-center">
						<div class="card-circle d-flex justify-content-center align-items-center">
							<i class="fas fa-chart-line indigo-text"></i>
						</div>
						</div>

						<!--Price -->
						<h2 class="font-weight-bold my-4">99$</h2>
						<p class="grey-text">At ab ea a molestiae corrupti numquam quo beatae minima ratione magni
						accusantium repellat eveniet quia vitae.</p>
						<a class="btn btn-indigo btn-rounded">Buy now</a>

					</div>
				</div>
			</div>
			

			</div>
			<!-- Grid row -->

		</section>
		<!--Section: Content-->


		</div>
		
		<div class="parallax1 parallax-divider1" ></div>

		<div class="mask rgba-gradient align-items-center" >
				
			<div class="col-md-12 mb-4 white-text text-center wow fadeIn texto_descricao_marca" >
				<h4 class="display-2 font-weight-bold white-text mb-0 pt-md-2 pt-2">A Consultoria</h4>
				<hr class="hr-light my-4 w-75">
				<h4 class="subtext-header mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit deleniti consequuntur nihil.</h4>
				<button class="btn btn-amber btn-lg">Ver planos</button>
			</div>
		</div>

	
	<!--COMO FUNCIONA-->
	<div class="parallax1 parallax-divider1" ></div>

	<div class="container-fluid  my-5 pt-5 pb-3 px-5">

		<!-- Section -->
		<section class="container ">
			
			<!-- Modal -->
			<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					<iframe id="player" class="embed-responsive-item" src="https://www.youtube.com/embed/7MUISDJ5ZZ4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
				</div>
			</div>
			</div>

			<h3 class="font-weight-bold text-center dark-grey-text pb-2">Como Funciona ?</h3>
			<hr class="w-header my-4">
			<p class="lead text-center text-muted pt-2 mb-5">Explore the best MDB template in the market in a short 1-minute video.</p>

			<div class="row align-items-center">

			<div class="col-lg-6 mb-4">
				<div class="view z-depth-1-half rounded">
				<img class="rounded img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(6).jpg" alt="Video title">
				<div class="mask flex-center rgba-black-light">
					<a id="play" class="btn-floating btn-primary btn-lg" data-toggle="modal" data-target="#modal1"><i class="fas fa-play"></i></a>
				</div>
				</div>
			</div>

			<div class="col-lg-6 mb-4">

				<ol class="step pl-0">
				<li class="step-element pb-0">
					<div class="step-number">
					<span class="number">1</span>
					</div>
					<div class="step-excerpt">
					<h6 class="font-weight-bold dark-grey-text mb-3">Write your requirements</h6>
					<p class="text-muted">Think the or organization same proposal to affected heard reclined in be it reassuring.</p>
					</div>
				</li>
				<li class="step-element pb-0">
					<div class="step-number">
					<span class="number">2</span>
					</div>
					<div class="step-excerpt">
					<h6 class="font-weight-bold dark-grey-text mb-3">Sign the contract</h6>
					<p class="text-muted">Think the or organization same proposal to affected heard reclined in be it reassuring.</p>
					</div>
				</li>
				<li class="step-element pb-0">
					<div class="step-number">
					<span class="number">3</span>
					</div>
					<div class="step-excerpt">
					<h6 class="font-weight-bold dark-grey-text mb-3">We start developing</h6>
					<p class="text-muted">Think the or organization same proposal to affected heard reclined in be it reassuring.</p>
					</div>
				</li>
				</ol>

			</div>

			</div>
			
		</section>
		<!-- Section -->

	</div>

	<!--ARTIGOS-->
	<section class="artigos">

		<h1 class="titulo-artigos">Artigos</h1>
			
		<div class="dicas">

			<div class="container-dicas">
			
				<div class="imagem image-effect">
						<img src="image/imagem-artigo.jpg">
				</div>

				<div class="box-dicas">
					<div>
						<p class="titulo-dica-texto" align="justify">Aeróbio em jejum</p>
						<p class="dica-texto" align="justify">Como utilizar o aeróbio em jejum para perder gordura mais rápido? Encontre essa resposta e mais nesse artigo. Em todo programa de treinamento voltado para o […]</p>
					</div>
				</div>

				<div class="box-leia-mais">
					<div class="leia-mais">
						<p>&#128366;</p>
						<a href= "dica">Leia mais</a>
					</div>

				</div>
			</div>
		

			<div class="container-dicas">
			
				<div class="imagem image-effect">
						<img src="image/imagem-artigo.jpg">
				</div>

				<div class="box-dicas">
					<div>
						<p class="titulo-dica-texto" align="justify">Aeróbio em jejum</p>
						<p class="dica-texto" align="justify">Como utilizar o aeróbio em jejum para perder gordura mais rápido? Encontre essa resposta e mais nesse artigo. Em todo programa de treinamento voltado para o […]</p>
					</div>
				</div>

				<div class="box-leia-mais">
					<div class="leia-mais">
						<p>&#128366;</p>
						<a href= "dica-um">Leia mais</a>
					</div>

				</div>
			</div>

			<div class="container-dicas">
			
				<div class="imagem image-effect">
						<img src="image/imagem-artigo.jpg">
				</div>

				<div class="box-dicas">
					<div>
						<p class="titulo-dica-texto" align="justify">Aeróbio em jejum</p>
						<p class="dica-texto" align="justify">Como utilizar o aeróbio em jejum para perder gordura mais rápido? Encontre essa resposta e mais nesse artigo. Em todo programa de treinamento voltado para o […]</p>
					</div>
				</div>

				<div class="box-leia-mais">
					<div class="leia-mais">
						<p>&#128366;</p>
						<a href= "dica-um">Leia mais</a>
					</div>

				</div>
			</div>

			<div class="container-dicas">
			
				<div class="imagem image-effect">
						<img src="image/imagem-artigo.jpg">
				</div>

				<div class="box-dicas">
					<div>
						<p class="titulo-dica-texto" align="justify">Aeróbio em jejum</p>
						<p class="dica-texto" align="justify">Como utilizar o aeróbio em jejum para perder gordura mais rápido? Encontre essa resposta e mais nesse artigo. Em todo programa de treinamento voltado para o […]</p>
					</div>
				</div>

				<div class="box-leia-mais">
					<div class="leia-mais">
						<p>&#128366;</p>
						<a href= "dica-um">Leia mais</a>
					</div>

				</div>
			</div>

			<div class="container-dicas">
			
				<div class="imagem image-effect">
						<img src="image/imagem-artigo.jpg">
				</div>

				<div class="box-dicas">
					<div>
						<p class="titulo-dica-texto" align="justify">Aeróbio em jejum</p>
						<p class="dica-texto" align="justify">Como utilizar o aeróbio em jejum para perder gordura mais rápido? Encontre essa resposta e mais nesse artigo. Em todo programa de treinamento voltado para o […]</p>
					</div>
				</div>

				<div class="box-leia-mais">
					<div class="leia-mais">
						<p>&#128366;</p>
						<a href= "dica-um">Leia mais</a>
					</div>

				</div>
			</div>

			<div class="container-dicas">
			
				<div class="imagem image-effect">
						<img src="image/imagem-artigo.jpg">
				</div>

				<div class="box-dicas">
					<div>
						<p class="titulo-dica-texto" align="justify">Aeróbio em jejum</p>
						<p class="dica-texto" align="justify">Como utilizar o aeróbio em jejum para perder gordura mais rápido? Encontre essa resposta e mais nesse artigo. Em todo programa de treinamento voltado para o […]</p>
					</div>
				</div>

				<div class="box-leia-mais">
					<div class="leia-mais">
						<p>&#128366;</p>
						<a href= "dica-um">Leia mais</a>
					</div>

				</div>
			</div>
		</div>

	</section>

	<div class="parallax parallax-divider"></div>

	<div class="mask rgba-gradient align-items-center" >
				<!-- Content -->
				<div class="col-md-12 mb-4 white-text text-center wow fadeIn texto_descricao_marca" >
					<h4 class="display-2 font-weight-bold white-text mb-0 pt-md-2 pt-2">A Consultoria</h4>
					<hr class="hr-light my-4 w-75">
					<h4 class="subtext-header mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit deleniti consequuntur nihil.</h4>
					<button class="btn btn-amber btn-lg">Ver planos</button>
					</div>
			</div>
	<div class="parallax parallax-divider " style="margin-bottom: -47px;"></div>

<?php echo \Classes\ClassLayout::setFooter() ?>
