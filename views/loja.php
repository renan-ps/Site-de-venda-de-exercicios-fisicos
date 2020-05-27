<?php echo \Classes\ClassLayout::setHeader('Loja', "", ""); ?>

<h2 class="titulo-loja">Loja do Zé</h2>
<div class="container-loja">
    
    <div class="produto" id="1">
        <div class="imagem-produto">
            <img src="image/blusa-produto-frente.jpeg">

            <div class="container-produto">
                <div class="box-saiba-mais-produto">
                    <div class="saiba-mais-produto"><a href="saiba-mais">Saiba mais</a></div>
                    <div class="favorito-produto"><a href="#">Favoritos</a></div>
                </div>
            </div>
        </div>
        <div class="descricao-produto">
            <h4>Blusa feminina</h4>
            <p align="justify">A Regata Fitness tem um tecido slim fit que dá um toque mais feminino.
            </p>
        </div>
        <div class="tamanho-roupa-produto">
            <label for="p">P</label>
            <input type="radio" value="P" id="P" name="tamanho">
            <label for="m">M</label>
            <input type="radio" value="M" id="m" name="tamanho">
            <label for="g">G</label>
            <input type="radio" value="G" id="g" name="tamanho">
        </div>
        <div class="valor-produto"><span>$99,90</span><br>Ou em até 10x de R$9,90 s/juros</div>
        <div class="botao-produto">
            <input type="submit" value="Comprar"></input>
        </div>
    </div>

    <div class="produto" id="2">
        <div class="imagem-produto">
            <img src="image/img-equipamento-loja.jpg">
            <div class="container-produto">
                <div class="box-saiba-mais-produto">
                    <div class="saiba-mais-produto"><a href="saiba-mais">Saiba mais</a></div>
                    <div class="favorito-produto"><a href="#">Favoritos</a></div>
                </div>
            </div>
        </div>
        <div class="descricao-produto">
            <h4>Par de Halter</h4>
            <p align="justify">Hateres de ferro com quatro anilhas cada, barra e presilhas.   
                Ambas totalizam 20kg.
            </p>
        </div>
        <div class="valor-produto"><span>$139,90</span><br>Ou em até 10x de R$13,90 s/juros</div>
        <div class="botao-produto">
            <input type="submit" class="botao-compra-produto" value="Comprar"></input>
        </div>
    </div>

    <div class="produto" id="3">
        <div class="imagem-produto" >
            <img src="image/img-treino-loja.jpg">

            <div class="container-produto">
                <div class="box-saiba-mais-produto">
                    <div class="saiba-mais-produto"><a href="saiba-mais">Saiba mais</a></div>
                    <div class="favorito-produto"><a href="#">Favoritos</a></div>
                </div>
            </div>

        </div>
        <div class="descricao-produto">
            <h4>Treinos de Resistência</h4>
            <p align="justify">Treinos de resistência são poderosos no combate ao cansaço e te proporciona uma vida muito mais saudável.
            </p>
        </div>
        <div class="valor-produto"><span>R$64,90</span><br>Ou em até 10x de R$6,49 s/juros</div>
        
        <div class="botao-produto">
            <input type="submit" class="botao-compra-produto" value="Comprar"></input>
        </div>
    </div>
</div>

<div class="paypal">
    <p>Pague com:</p>
    <img src="image/paypal.png" alt="icon-paypal">
</div>




<!-- Footer -->
<footer class='page-footer font-small style-footer lighten-3 pt-4'>



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

    <div class=' text-center py-3 copyright-style'>©Copyright 2020 |
        <a class='copyright-style' href='copyright'>Treino do Zé. Todos os Direitos Reservados.
            Criado pela equipe <span class='falcon-tecnol'>Falcon Technology</span></a>
    </div>

</footer>

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js'></script>
<script src='lib/js/jquery.js'></script>
<script src='lib/js/index.js'></script>
<script src="lib/js/loja.js"></script>
<script src='lib/js/vanilla-masker.min.js'></script>
<script src='lib/js/javascript.js'></script>