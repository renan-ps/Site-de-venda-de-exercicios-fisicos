<?php
namespace Classes;

class ClassLayout{

    //Definição das tags do head
    public static function setHeader($title = 'Bem vindo', $description = "", $author = 'YgReJo'){
        $html = "<!DOCTYPE html>\n";
        $html .= "<html lang='pt-pt'>\n";
        $html .= "<head>\n";
        $html .= "    <title>".NAME." - $title</title>\n\n";

        $html .= "    <meta charset='utf-8'>\n";
        $html .= "    <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
        $html .= "    <meta http-equiv='X-UA-Compatible' content='IE=edge'>\n";
        $html .= "  <meta name=theme-color content=#FCC00A>\n";
        $html.="<meta name=apple-mobile-web-app-status-bar-style content=#FCC00A>\n";
        $html.="<meta name=msapplication-navbutton-color content=#75b529>\n";

        $html .= "    <a href='https://wa.me/". WHATSAPP ."?text=Gostaria%20de%20mais%20informações' style='position:fixed;width:60px;height:60px;bottom:100px;right:16px;
        z-index:1000;' target='_blank'>
         <img  class='whatsapp' src='https://images.tcdn.com.br/static_inst/integracao/imagens/whatsapp.png' />
      
        </a>\n";

         

        $html .= "    <meta name='description' content='$description'>\n";
        $html .= "    <meta name='author' content='$author'>\n\n";
        $html .= "    <link rel='stylesheet' type='text/css' href='".DIRCSS."reset.css'>";
        $html .= "    <link href='https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap' rel='stylesheet'>\n";
        $html .= "    <link rel='shortcut icon' href='".DIRIMG."../image/personal-favicon.png'>\n";
        $html .= "    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>";
        $html .= "    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'>\n";
        $html .= "    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>\n";
        $html .= "    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css' rel='stylesheet'>\n";
        $html .= "    <link href='https://fonts.googleapis.com/css2?family=EB+Garamond:ital@0;1&display=swap' rel='stylesheet'>";
        $html .= "    <link href='https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap' rel='stylesheet'>";
        $html .= "    <link href='https://fonts.googleapis.com/css2?family=Anton&display=swap' rel='stylesheet'>";
        $html .= "    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css'>";

        $html .= "    <link rel='stylesheet' type='text/css' href='".DIRPAGE."lib/css/style.css'>\n";

        $html .= "</head>\n\n";
        $html .= "<body class='body'>\n";
        $html .= "    <header>\n\n";
        
		$html .= "        <nav class='navbar fixed-top navbar-expand-lg  navbar-light' id='dynamic-navbar'>";

    $html .= "            <div class='container container-navbar'>";
    $html .= "                <a class='navbar-brand' href='#'>
                                <img src='image/logo.png'>
                              </a>";
                              
    $html .= "                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#basicExampleNav'
                                aria-controls='basicExampleNav' aria-expanded='false' aria-label='Toggle navigation'>
                                <span class='navbar-toggler-icon'></span>
                             </button>";
    $html .= "               <div class='collapse navbar-collapse' id='basicExampleNav'>";
      $html .= "                <ul class='menu navbar-nav mr-auto'>";
      $html .= "                    <li class='nav-item'>
                                      <a class='nav-link waves-effect  text-wrap' href='index' target='_self'>Home</a>
                                    </li>";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect effect-scroll' href='index#personal' target='_self' id='#personal'><span>O Personal</span></a>
                                    </li>\n";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect effect-scroll' href='index#consultoria' target='_self' id='#consultoria'><span>A Consultoria</span></a>
                                    </li>\n";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect effect-scroll' href='index#planos' target='_self' id='#planos'><span>Planos</span></a>
                                    </li>\n";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect effect-scroll ' href='index#como-funciona' target='_self' id='#como-funciona'><span>Como funciona ?</span></a>
                                    </li>\n";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect effect-scroll' href='index#porque-contratar' target='_self' id='#porque-contratar'><span>Por que contratar ?</span></a>
                                    </li>\n";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect' href='resultados' id='#resultados' target='_self'><span>Resultados</span></a>
                                    </li>\n";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect' href='loja' target='_self'><span>Loja</span></a>
                                    </li>\n";
$html .= "                          <li class='nav-item dropdown '>
                                         <a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown'
          aria-haspopup='true' aria-expanded='false'>Login</a>
        <div class='dropdown-menu dropdown-primary background-dropdown' aria-labelledby='navbarDropdownMenuLink'>
          <a class='dropdown-item' href='login' >Entrar</a>
          <a class='dropdown-item' href='cadastro'>Cadastra-se</a>
          
                                    </li>\n";



  
        

      $html .= "                  </ul>\n\n";
    $html .= "                </div>";
    $html .= "              </div>";

		$html .= "            </section>\n\n";
		$html .= "        </nav>\n\n";
	    $html .= "    </header>\n\n\n";

	    $html .="    <main>\n\n";
 
     

        return $html;
    }


    //Definição das tags do footer
    public static function setFooter(){

        $html = "
        </main>
            <!-- Footer -->
            <footer>
		
              <div class=footer-container>

                    <div class=colun-footer-1>
                      <div class=img-footer>
                        <img src=image/logo.png alt=Logotipo Treino do Zé>
                      </div>
                      <div class=sobre-mim-footer>
                        <h3>Sobre mim</h3>
                        <p align='justify'>Eu quero ajudar você a alcançar de forma definitiva os seus objetivos na academia e mudar de vez 
                          a sua relação com seu corpo.</p>
                      </div>
                      <ul class=contact-footer>
                        <li> <h3>Entre em Contato</h3></li>
                        <li><p><i class='fab fa-whatsapp icon-whatsapp-footer'></i> +351 35263789</p></li>
                        <li><p class=email-footer>treinodoze@gmail.com</p></li>
                      </ul>
                    </div>
                  
                    <div class=colun-footer-2>
                      <ul class=secoes-footer>
                        <li><h3>Seções</h3></li>
                        <li><a class='effect-scroll' id='#personal' href='index#personal'>Sobre mim</a></li>
						<li><a class='effect-scroll' id='#depoimentos' href='index#depoimentos'>Depoimentos</a></li>
						<li><a class='effect-scroll' id='#planos' href='planos'>Planos</a></li>
						<li><a class='effect-scroll' id='#como-funciona' href=#>Como Funciona</a></li>
                        <li><a class='effect-scroll' id='#artigos' href='artigos'>Artigos</a></li>
						<li><a class='effect-scroll' id='#porque-contratar' href='porque-contratar'>Por que nos contratar</a></li>
                        <li><a class='effect-scroll' id='#faq' href='faq'>FAQ</a></li>
						
                        
                      </ul>
                    </div>

                    <div class=colun-footer-3>
                      <ul class=links-uteis-footer>
                        <li><h3>Links úteis</h3></li>
                        <li><a href='plano-basico'>Plano Básico</a></li>
                        <li><a href='plano-premium'>Plano Premium</a></li>
						<li><a href='plano-advanced'>Plano Advanced</a></li>
						<li><a href=loja>Loja</a></li>
                        <li><a href='resultados'>Resultados</a></li>
                        <li><a href=#>Login</a></li>
                      </ul>
                    </div>
                  </div>
              
                <div class=container-redes-sociais-footer>
                  <a href=facebook><i class='fab fa-facebook-f icons-rede-sociais-footer'></i></a>
                  <a href=twitter><i class='fab fa-twitter icons-rede-sociais-footer'></i></a>
                  <a href=instagram><i class='fab fa-instagram icons-rede-sociais-footer'></i></a>
                  <a href=youtube><i class='fab fa-youtube icons-rede-sociais-footer'></i></a>
                  <a href=whatsapp><i class='fab fa-whatsapp icons-rede-sociais-footer'></i></a>
                </div>
            </footer>

            <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

          <!-- Bootstrap tooltips -->
          <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
          <!-- Bootstrap core JavaScript -->
          <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
          <!-- MDB core JavaScript -->
          <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js'></script>

  
            <script src='". DIRPAGE ."lib/js/zepto.min.js'></script>
            <script src='". DIRPAGE ."lib/js/vanilla-masker.min.js'></script>
            <script src='https://www.google.com/recaptcha/api.js?render=".SITEKEY."'></script>
            <script src='". DIRPAGE ."lib/js/javascript.js'></script>
            <script src='". DIRPAGE ."lib/js/jquery.js'></script>
            <script src='". DIRPAGE ."lib/js/index.js'></script>
            <script src='lib/js/loja.js'></script>
            <script src='lib/js/planos.js'></script>
        </body>
        </html>
        ";
        return $html;
    }



	//Definição das tags do head da parte do usuário
	public static function setHeaderUser(){
		$html = "
<!DOCTYPE html>
<html>
			
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
	
  <meta name='theme-color' content='#234C80'>
	<link rel='stylesheet' href='" . DIRCSS . "user/bootstrap.min.css?h=504792f7254b7c7ba831bdd93d286139'>
	<link rel='stylesheet' href='" . DIRCSS . "user/Profile-Edit-Form-1.css'>
	<link rel='stylesheet' href='" . DIRCSS . "user/Profile-Edit-Form.css'>
	<link rel='stylesheet' href='" . DIRCSS . "user/styles.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cookie'>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.1/css/all.css'>
    <a href='https://wa.me/". WHATSAPP ."?text=Gostaria%20de%20mais%20informações' style='position:fixed;width:60px;height:60px;bottom:100px;right:16px;
        z-index:1000;' target='_blank'>
         <img  class='whatsapp' src='https://images.tcdn.com.br/static_inst/integracao/imagens/whatsapp.png' />
      
        </a>

</head>
  

";

		return $html;
	}

	//Definição das tags da navbar lateral do usuário
	public static function setNavbarSideUser(){
    	$html =
"
<body id='page-top'>
	<div id='wrapper'>
		<nav class='navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0'>
			<div class='container-fluid d-flex flex-column p-0'>
				<a class='navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0' href='#'>
					<div class='sidebar-brand-icon rotate-n-15'>
						<i class='fas fa-laugh-wink fas fa-dumbbell'></i>
					</div>

					<div class='sidebar-brand-text mx-3'><span>Treino do Zé</span></div>
				</a>
				<hr class='sidebar-divider my-0'>
				<ul class='nav navbar-nav text-light' id='accordionSidebar'>
					<li class='nav-item' role='presentation'>
						<a class='nav-link' href='Planos.php'>
							<i class='far fa-user-circle'></i>
								<span>Gerenciar Plano</span>
						</a>
					</li>

					<li class='nav-item' role='presentation'><a class='nav-link active' href='Perfil_user.php'><i class='fas fa-user-circle'></i><span>Minhas Informaçoes</span></a></li>
					<li class='nav-item' role='presentation'><a class='nav-link' href='time_line_user.php'><i class='fas fa-key'></i><span>TimeLine</span></a></li>
					<li class='nav-item' role='presentation'></li>
					<li class='nav-item' role='presentation'><a class='nav-link' href='#'><i class='fas fa-window-maximize'></i><span>Gerenciar Pagamentos</span></a></li>
					
				</ul>
				<div class='text-center d-none d-md-inline'><button class='btn rounded-circle border-0' id='sidebarToggle' type='button'></button></div>
			</div>
		</nav>    	
";
    	return $html;
	}

	//Definição das tags da navbar superior do usuário
	public static function setNavbarHighUser(){
    	$html =
"
		<div class='d-flex flex-column' id='content-wrapper'>
			<div id='content'>
				<nav class='navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top'>
					<div class='container-fluid'><button class='btn btn-link d-md-none rounded-circle mr-3' id='sidebarToggleTop' type='button'><i class='fas fa-bars'></i></button>
						<form class='form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search'>
							<div class='input-group'>
								<div class='input-group-append'></div>
							</div>
						</form>
						<ul class='nav navbar-nav flex-nowrap ml-auto'>
							<li class='nav-item dropdown d-sm-none no-arrow'><a class='dropdown-toggle nav-link' data-toggle='dropdown' aria-expanded='false' href='#'></a>
								<div class='dropdown-menu dropdown-menu-right p-3 animated--grow-in' role='menu' aria-labelledby='searchDropdown'>
									<form class='form-inline mr-auto navbar-search w-100'>
										<div class='input-group'><input class='bg-light form-control border-0 small' type='text' placeholder='Search for ...'>
											<div class='input-group-append'><button class='btn btn-primary py-0' type='button'><i class='fas fa-search'></i></button></div>
										</div>
									</form>
								</div>
							</li>
							<li class='nav-item dropdown no-arrow mx-1' role='presentation'>
								<div class='nav-item dropdown no-arrow'><button class='btn btn-primary dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><span class='badge badge-danger badge-counter'>3+</span><i class='fas fa-bell fa-fw'></i></button>
									<div class='dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in'
										role='menu'>
										<h6 class='dropdown-header'>alerts center</h6>
										<a class='d-flex align-items-center dropdown-item' href='#'>
											<div class='mr-3'>
												<div class='bg-primary icon-circle'><i class='fas fa-file-alt text-white'></i></div>
											</div>
											<div><span class='small text-gray-500'>December 12, 2019</span>
												<p>A new monthly report is ready to download!</p>
											</div>
										</a>
										<a class='d-flex align-items-center dropdown-item' href='#'>
											<div class='mr-3'>
												<div class='bg-success icon-circle'><i class='fas fa-donate text-white'></i></div>
											</div>
											<div><span class='small text-gray-500'>December 7, 2019</span>
												<p>$290.29 has been deposited into your account!</p>
											</div>
										</a>
										<a class='d-flex align-items-center dropdown-item' href='#'>
											<div class='mr-3'>
												<div class='bg-warning icon-circle'><i class='fas fa-exclamation-triangle text-white'></i></div>
											</div>
											<div><span class='small text-gray-500'>December 2, 2019</span>
												<p>Spending Alert: We've noticed unusually high spending for your account.</p>
											</div>
										</a><a class='text-center dropdown-item small text-gray-500' href='#'>Show All Alerts</a></div>
								</div>
							</li>
							<li class='nav-item dropdown no-arrow mx-1' role='presentation'>
								<div class='nav-item dropdown no-arrow'><button class='btn btn-primary dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-envelope fa-fw'></i><span class='badge badge-danger badge-counter'>7</span></button>
									<div class='dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in'
										role='menu'>
										<h6 class='dropdown-header'>alerts center</h6>
										<a class='d-flex align-items-center dropdown-item' href='#'>
											<div class='dropdown-list-image mr-3'><img class='rounded-circle' src='../../image/avatars/avatar4.jpeg?h=fefb30b61c8459a66bd338b7d790c3d5'>
												<div class='bg-success status-indicator'></div>
											</div>
											<div class='font-weight-bold'>
												<div class='text-truncate'><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
												<p class='small text-gray-500 mb-0'>Emily Fowler - 58m</p>
											</div>
										</a>
										<a class='d-flex align-items-center dropdown-item' href='#'>
											<div class='dropdown-list-image mr-3'><img class='rounded-circle' src='../../image/avatars/avatar2.jpeg?h=5d142be9441885f0935b84cf739d4112'>
												<div class='status-indicator'></div>
											</div>
											<div class='font-weight-bold'>
												<div class='text-truncate'><span>I have the photos that you ordered last month!</span></div>
												<p class='small text-gray-500 mb-0'>Jae Chun - 1d</p>
											</div>
										</a>
										<a class='d-flex align-items-center dropdown-item' href='#'>
											<div class='dropdown-list-image mr-3'><img class='rounded-circle' src='../../image/avatars/avatar3.jpeg?h=c5166867f10a4e454b5b2ae8d63268b3'>
												<div class='bg-warning status-indicator'></div>
											</div>
											<div class='font-weight-bold'>
												<div class='text-truncate'><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
												<p class='small text-gray-500 mb-0'>Morgan Alvarez - 2d</p>
											</div>
										</a>
										<a class='d-flex align-items-center dropdown-item' href='#'>
											<div class='dropdown-list-image mr-3'><img class='rounded-circle' src='../../image/avatars/avatar5.jpeg?h=35dc45edbcda6b3fc752dab2b0f082ea'>
												<div class='bg-success status-indicator'></div>
											</div>
											<div class='font-weight-bold'>
												<div class='text-truncate'><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
												<p class='small text-gray-500 mb-0'>Chicken the Dog · 2w</p>
											</div>
										</a><a class='text-center dropdown-item small text-gray-500' href='#'>Show All Alerts</a></div>
								</div>
								<div class='shadow dropdown-list dropdown-menu dropdown-menu-right' aria-labelledby='alertsDropdown'></div>
							</li>
							<div class='d-none d-sm-block topbar-divider'></div>
							<li class='nav-item dropdown no-arrow' role='presentation'>
								<div class='nav-item dropdown no-arrow'><button class='btn btn-primary dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button' style='background-color: rgb(62,100,211);'><span class='d-none d-lg-inline mr-2 text-gray-600 small'>Valerie Luna</span><img class='border rounded-circle img-profile' src='assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656'></button>
									<div
										class='dropdown-menu shadow dropdown-menu-right animated--grow-in' role='menu'><a class='dropdown-item' role='presentation' href='#'><i class='fas fa-user fa-sm fa-fw mr-2 text-gray-400'></i>&nbsp;Profile</a><a class='dropdown-item' role='presentation' href='#'><i class='fas fa-cogs fa-sm fa-fw mr-2 text-gray-400'></i>&nbsp;Settings</a>
										<a
											class='dropdown-item' role='presentation' href='#'><i class='fas fa-list fa-sm fa-fw mr-2 text-gray-400'></i>&nbsp;Activity log</a>
											<div class='dropdown-divider'></div><a class='dropdown-item' role='presentation' href='#'><i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>&nbsp;Logout</a></div>
					</div>
					</li>
					</ul>
			</div>
			</nav>
";

    	return $html;
	}

	//Definição das tags do footer do usuário
	public static function setFooterUser(){
    	$html =
"
		</div>
	</div><a class='border rounded d-inline scroll-to-top' href='#page-top'><i class='fas fa-angle-up'></i></a></div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js'></script>

   <script src='" . DIRPAGE . "theme.js' type='text/javascript' charset='utf-8'></script>
   <script src='" . DIRPAGE . "Profile-Edit-Form.js' type='text/javascript' charset='utf-8'></script>

   <script src='../../lib/js/theme.js' type='text/javascript' charset='utf-8'></script>
   <script src='../../lib/js/Profile-Edit-Form.js' type='text/javascript' charset='utf-8'></script>

</body>

</html>
";
	}

  public static function setHeaderLogin(){
    $html = "<!doctype html>
<html lang='pt-br'>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <link rel='apple-touch-icon' sizes='57x57' href='../image/mini-icone/apple-icon-57x57.png'>
  <link rel='apple-touch-icon' sizes='60x60' href='../image/mini-icone/apple-icon-60x60.png'>
  <link rel='apple-touch-icon' sizes='72x72' href='../image/mini-icone/apple-icon-72x72.png'>
  <link rel='apple-touch-icon' sizes='76x76' href='../image/mini-icone/apple-icon-76x76.png'>
  <link rel='apple-touch-icon' sizes'114x114' href='../image/mini-icone/apple-icon-114x114.png'>
  <link rel='apple-touch-icon' sizes'120x120' href='../image/mini-icone/apple-icon-120x120.png'>
  <link rel='apple-touch-icon' sizes''144x144' href='../image/mini-icone/apple-icon-144x144.png'>
  <link rel='apple-touch-icon' sizes'152x152' href='../image/mini-icone/apple-icon-152x152.png'>
  <link rel='apple-touch-icon' sizes'180x180' href='/apple-icon-180x180.png'>
  <link rel='icon' type='image/png' sizes='192x192'  href='../image/mini-icone/android-icon-192x192.png'>
  <link rel='icon' type='image/png' sizes='32x32' href='../image/mini-icone/favicon-32x32.png'>
  <link rel='icon' type='image/png' sizes='96x96' href='../image/mini-icone/favicon-96x96.png'>
  <link rel='icon' type='image/png' sizes='16x16' href='../image/mini-icone/favicon-16x16.png'>
  <link rel='maniest' hef='../im'ge/mini'icone/manifest.json'>
  <meta name='msapplication-TileColor' content='#ffffff'>
  <meta name='msapplication-TileImage' content='../image/mini-icone/ms-icon-144x144.png'>
  <meta name='theme-color' content='#f6c23e'>
  <title>Treino do Zé - Login</title>
  
  <link rel='stylesheet' href='../lib/css/user/bootstrap.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cookie'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.1/css/all.css'>
  <link rel='stylesheet' href='../lib/css/style.css'>
  
</head>

<body class='bg-gradient-primary' style='background-color: rgb(88,73,146);     background-image: linear-gradient(180deg,#f6c23e 10%,#f6c23e85);'>";
  }

}





























