<?php
header('Content-type: text/html; charset=utf-8');

use Classes\ClassPlano;

$dPlano = new ClassPlano;
$plano = $_GET['p'];
$p = $dPlano->getPlan($plano);

echo \Classes\ClassLayout::setHeader($p['titulo'], "", "");
?>

<div class="plano-basico">
    <div class="banner-plano-basico">
        <img src="<?php echo DIRIMG . $p['img1'] ?>" alt="">
        <h1 class="animate__animated animate__lightSpeedInLeft"><?php echo $p['titulo'] ?></h1>
    </div>
    <div class="container-plano-basico">
        <div class="container-apresentacao-plano-basico">
            <div class="container-img-valor-plano-basico">
                <div class="img-plano-basico">
                    <img src="<?php echo DIRIMG . $p['img2'] ?>" alt="Mulher se exercitando">
                    <div class="retina-plano-basico"><p><?php echo $p['subtitulo'] ?></p></div>
                    <div class="avaliacao-plano-basico"><a href="avaliacoes">347 avaliações para esse plano<br>&#11088;&#11088;&#11088;&#11088;&#11088;</a>
                    </div>
                </div>
                <div class="valor-plano-basico">
                    <p class="valor-basico">€<?php echo number_format($p['preco'], 2, ",", "") ?></p>
									<?php
									switch ($p['id']) {
										case 2:
											echo "<div> Pague em até 3x €" . number_format(($p['preco'] / 3), 2, ',', '') . "<br>No cartão de crédito</div>";
											break;
										case 3:
											echo "<div> Pague em até 6x €" . number_format(($p['preco'] / 6), 2, ',', '') . "<br>No cartão de crédito</div>";
											break;
                                      default:
                                          echo "";
                                          break;
									}

									?>
                </div>
            </div>

            <div class="descricao-plano-basico">
                <p align="justify"><?php echo $p['descricao'] ?></p>
            </div>

        </div>


        <div class="container-pacote-pagamento-plano-basico">

            <div class="incluso-plano-advanced">
                <h4>O que compõe o <?php echo $p['titulo']; ?>:</h4>
                <br>
                <ul class="lista-item-plano-advanced">
									<?php echo $p['possui'] ?>
                </ul>
            </div>

            <div class="video-experimental-plano-basico">
                <h3>Confira nossa aula experimental</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/XW9IZfHiVZM" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>


        </div>

        <div class="forma-de-pagamento">
            <h5>Pague com:</h5>

            <div class="cartoes-plano">
                <img src="image/icon-mastercard.svg" alt="cartão de crédito">
                <img src="image/icon-visa.svg" alt="cartão de crédito">
                <img class="america-plano" src="image/icon-american-express.svg" alt="cartão de crédito">
                <img class="pay-pal-plano" src="image/icon-paypal.svg" alt="Pay-pal">


            </div>
            <form action="carrinho" method="post">
                <input type="hidden" name="plano" value="<?php echo $p['id']; ?>">
                <input class="botao-plano" type="submit" value="Comprar" alt="Botão">
            </form>
        </div>


    </div>
</div>

<!-- Footer -->
<?php echo \Classes\ClassLayout::setFooter() ?>
