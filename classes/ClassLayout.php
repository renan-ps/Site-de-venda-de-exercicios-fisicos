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

        $html .= "    <a href='https://wa.me/". WHATSAPP ."?text=Gostaria%20de%20mais%20informações' style='position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
        z-index:1000;' target='_blank'>
        <i style='margin-top:16px' class='fab fa-whatsapp'></i>
        </a>\n";

        $html .= "    <meta name='description' content='$description'>\n";
        $html .= "    <meta name='author' content='$author'>\n\n";
        $html .= "    <link href='https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap' rel='stylesheet'>\n";
        $html .= "    <link rel='stylesheet' type='text/css' href='".DIRCSS."reset.css\n'>";
        $html .= "    <link rel='shortcut icon' href='".DIRIMG."../image/personal-favicon.png'>\n";
        $html .= "    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>";
        $html .= "    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'>\n";
        $html .= "    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>\n";
        $html .= "    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css' rel='stylesheet'>\n";
        $html .= "    <link href='https://fonts.googleapis.com/css2?family=EB+Garamond:ital@0;1&display=swap' rel='stylesheet'>";
        $html .= "    <link href='https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap' rel='stylesheet'>";
        $html .= "    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css'>";

        $html .= "    <link rel='stylesheet' type='text/css' href='".DIRPAGE."lib/css/style.css'>\n";

        $html .= "</head>\n\n";
        $html .= "<body class='body'>\n";
        $html .= "    <header>\n\n";
        
		$html .= "        <nav class='navbar fixed-top navbar-expand-lg navbar-light white style-navbar py-3'>";

    $html .= "            <div class='container-navbar'>";
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
                                        <a class='nav-link waves-effect effect-scroll' href='index#como-funciona' target='_self' id='#como-funciona'><span>Como funciona ?</span></a>
                                    </li>\n";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect effect-scroll' href='index#porque-contratar' target='_self' id='#porque-contratar'><span>Por que contratar ?</span></a>
                                    </li>\n";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect' href='loja' target='_self'><span>Loja</span></a>
                                    </li>\n";
      $html .= "                    <li class='nav-item'>
                                        <a class='nav-link waves-effect' href='xxx' target='_blank'><span>FAQ</span></a>
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
                        <li><a href=#>Sobre mim</a></li>
                        <li><a href=#>Como vou te ajudar</a></li>
                        <li><a href=#>Seu treino em alto nível</a></li>
                        <li><a href=#>Passo a passo para contratar</a></li>
                        <li><a href=#>Planos</a></li>
                        <li><a href=#>Depoimentos</a></li>
                        <li><a href=#>Perguntas frequentes</a></li>
                      </ul>
                    </div>

                    <div class=colun-footer-3>
                      <ul class=links-uteis-footer>
                        <li><h3>Links úteis</h3></li>
                        <li><a href=#>Plano Básico</a></li>
                        <li><a href=#>Plano Premium</a></li>
                        <li><a href=#>Plano Advanced</a></li>
                        <li><a href=#>Como funciona</a></li>
                        <li><a href=#>Loja</a></li>
                        <li><a href=#>Artigos</a></li>
                        <li><a href=#>A consultoria</a></li>
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

  
            <script src='". DIRPAGE ."lib/js/vanilla-masker.min.js'></script>
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
}



























