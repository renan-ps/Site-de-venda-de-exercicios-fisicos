/*BÁSICO*/


var planoBasico = $(".img-plano-basico");
var valorPlanoBasico = $(".valor-plano-basico p")

/*Anima a descrição presente na imagem principal ao passar do mouse*/
planoBasico.mouseenter(function() {

    $(this).find("p").addClass("animate__animated animate__zoomInDown");
    $(this).find(".avaliacao-plano-basico").addClass("animate__animated animate__zoomInDown");
});

/*Retira a classe que faz a animação na descrição presente na imagem principal ao retirar o mouse de sobre a imagem*/
planoBasico.mouseleave(function() {

    $(this).find("p").removeClass("animate__animated animate__zoomInDown");
    $(this).find(".avaliacao-plano-basico").removeClass("animate__animated animate__zoomInDown");
});


/*A cada 5 segundos essa função adiciona a classe que faz a animação no valor presente abaixo da imagem principal*/
setInterval(function() {

    $(".valor-plano-basico p").addClass("animate__animated animate__rubberBand");

}, 4000)

/*A cada 5.5 segundos essa função exclui a classe que faz a animação no valor presente abaixo da imagem principal*/
setInterval(function() {

    $(".valor-plano-basico p").removeClass("animate__animated animate__rubberBand");

}, 4600)


/*PREMIUM*/

var planoPremium = $(".img-plano-premium");
var valorPlanoPremium = $(".valor-plano-premium p")

/*Anima a descrição presente na imagem principal ao passar do mouse*/
planoPremium.mouseenter(function() {

    $(this).find("p").addClass("animate__animated animate__bounceInRight");
    $(this).find(".avaliacao-plano-premium").addClass("animate__animated animate__bounceInUp");
    $(this).find(".img-top-seller").addClass("animate__animated animate__rotateInDownRight");
});

/*Retira a classe que faz a animação na descrição presente na imagem principal ao retirar o mouse de sobre a imagem*/
planoPremium.mouseleave(function() {

    $(this).find("p").removeClass("animate__animated animate__bounceInRight");
    $(this).find(".avaliacao-plano-premium").removeClass("animate__animated animate__bounceInUp");
    $(this).find(".img-top-seller").removeClass("animate__animated animate__rotateInDownRight");
});


/*A cada 5 segundos essa função adiciona a classe que faz a animação no valor presente abaixo da imagem principal*/
setInterval(function() {

    $(".valor-plano-premium p").addClass("animate__animated animate__rubberBand");

}, 4000)

/*A cada 5.5 segundos essa função exclui a classe que faz a animação no valor presente abaixo da imagem principal*/
setInterval(function() {

    $(".valor-plano-premium p").removeClass("animate__animated animate__rubberBand");

}, 4600)


/*ADVANCED*/

var planoAdvanced = $(".img-plano-advanced");
var valorPlanoAdvanced = $(".valor-plano-advanced p")

/*Anima a descrição presente na imagem principal ao passar do mouse*/
planoAdvanced.mouseenter(function() {

    $(this).find("p").addClass("animate__animated animate__zoomInDown");
    $(this).find(".avaliacao-plano-advanced").addClass("animate__animated animate__zoomInDown");
});

/*Retira a classe que faz a animação na descrição presente na imagem principal ao retirar o mouse de sobre a imagem*/
planoAdvanced.mouseleave(function() {

    $(this).find("p").removeClass("animate__animated animate__zoomInDown");
    $(this).find(".avaliacao-plano-advanced").removeClass("animate__animated animate__zoomInDown");
});


/*A cada 5 segundos essa função adiciona a classe que faz a animação no valor presente abaixo da imagem principal*/
setInterval(function() {

    $(".valor-plano-advanced p").addClass("animate__animated animate__rubberBand");

}, 4000)

/*A cada 5.5 segundos essa função exclui a classe que faz a animação no valor presente abaixo da imagem principal*/
setInterval(function() {

    $(".valor-plano-advanced p").removeClass("animate__animated animate__rubberBand");

}, 4600)