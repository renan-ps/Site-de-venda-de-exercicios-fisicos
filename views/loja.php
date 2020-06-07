<?php echo \Classes\ClassLayout::setHeader('Loja', "", ""); ?>

<h2 class="titulo-loja">Loja do Zé</h2>
<div class="container-loja">
    
    <div class="produto" id="1">
        <div class="imagem-produto">
            <img class="img-propaganda-1-1" src="image/blusa-produto-frente.jpeg" alt="imagem de propaganda de roupa">
            <img class="img-produto-2 img-propaganda-1-2" src="image/blusa-produto-verso.jpeg" alt="imagem de propaganda de roupa">

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
            <img class="img-propaganda-2-1" src="image/img-equipamento-loja.jpg" alt="imagem de equipamento de musculação">
            <img class="img-produto-2 img-propaganda-2-2" src="image/img-equipamento-loja-2.jpg" alt="imagem de equipamento de musculação">

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
            <img src="image/img-treino-loja.jpg" class="img-propaganda-3-1" alt="imagem de pessoas se exercitando">
            <img src="image/img-treino-loja-2.jpeg" class="img-produto-2 img-propaganda-3-2"  alt="imagem de pessoas se exercitando">

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
    <img src="image/icon-paypal.svg" alt="icon-paypal">
</div>




<!-- Footer -->
<?php echo \Classes\ClassLayout::setFooter() ?>

