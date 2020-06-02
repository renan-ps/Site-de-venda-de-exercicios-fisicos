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
            <footer class='page-footer font-small style-footer lighten-3 pt-4'>
        
              <!--Imagens-->
              <div class='container-footer'>
        
                <div class='contatos'>
        
                    <ul class='duvidas'>
                        <li class='icon-contato'>&#9993;</li>
                        <li class='caracter-do-contato'>Você ainda tem dúvidas ?<br>ygrejo@gmail.com</li>
                    </ul>
        
                    <ul class='duvidas'>
                        <li class='icon-contato'>&#9743;</li>
                        <li class='caracter-do-contato'>Telefone<br>(21) 9999-9999</li>
                    </ul>
                </div>
        
                <div class='row grid-footer'>
        
                <div class='col-lg-2 col-md-6 mb-4 edit-width'>
                  <div class=' overlay z-depth-1-half img-footer'>
                    <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg' class='img-fluid'
                      alt=''>
                    <a href=''>
                      <div class='mask rgba-white-light'></div>
                    </a>
                  </div>
                </div>
        
                  <div class='col-lg-2 col-md-6 mb-4 edit-width'>
                    <div class='overlay z-depth-1-half img-footer'>
                      <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg' class='img-fluid'
                        alt=''>
                      <a href=''>
                        <div class='mask rgba-white-light'></div>
                      </a>
                    </div>
                  </div>
        
                  <div class='col-lg-2 col-md-6 mb-4 edit-width'>
                    <div class='overlay z-depth-1-half img-footer'>
                      <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg' class='img-fluid'
                        alt=''>
                      <a href=''>
                        <div class='mask rgba-white-light'></div>
                      </a>
                    </div>
                  </div>

                  <div class='col-lg-2 col-md-6 mb-4 edit-width'>
                  <div class='overlay z-depth-1-half img-footer'>
                    <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg' class='img-fluid'
                      alt=''>
                    <a href=''>
                      <div class='mask rgba-white-light'></div>
                    </a>
                  </div>
                </div>
        
                  
        
                  <div class='col-lg-2 col-md-6 mb-4 edit-width'>
                      <div class='overlay z-depth-1-half img-footer'>
                        <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg' class='img-fluid'
                          alt=''>
                        <a href=''>
                          <div class='mask rgba-white-light'></div>
                        </a>
                      </div>
                  </div>
        
                  <div class='col-lg-2 col-md-6 mb-4 edit-width'>
                    <div class='overlay z-depth-1-half img-footer'>
                      <img src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg' class='img-fluid'
                        alt=''>
                      <a href=''>
                        <div class='mask rgba-white-light'></div>
                      </a>
                    </div>
                  </div>
        
                </div>
              </div>
        

              <!--Redes sociais-->

              <div class='mb-3 text-center text-md-right rede-social'>
        
        
                <a class='fb-ic' href='https://www.facebook.com/ygor.regato.5'>
                  <i class='fab fa-facebook-f mr-4'> </i>
                </a>
        
                <a class='tw-ic'>
                  <i class='fab fa-twitter mr-4'> </i>
                </a>
        
                <a class='li-ic'>
                  <i class='fab fa-linkedin-in mr-4'> </i>
                </a>
        
                <a class='ins-ic'>
                  <i class='fab fa-instagram mr-4'> </i>
                </a>
        
                <a class='ins-ic'>
                  <i class='fab fa-youtube'></i> </i>
                </a>
        
              </div>
        
              <!--Copyright-->

              <div class=' text-center py-3 copyright-style' >©Copyright 2020 |
                <a class='copyright-style' href='copyright'> Treino do Zé. Todos os Direitos Reservados. 
                Criado pela equipe <span class='falcon-tecnol'>CornOut Tecnologia</span></a>
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
        </body>
        </html>
        ";
        return $html;
    }
}



























