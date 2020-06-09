var href = $(".effect-scroll");

href.click(function(evt) {
    evt.preventDefault();
    var id = $(this).attr("id");
    var distancia = $(id).offset().top;

    var altNav = $(".style-navbar").innerHeight();

    $("html, body").animate({

        scrollTop: distancia - altNav

    }, 600)
});



/*Mutação de cor no navbar ao scrollar da página */
$(window).scroll(function(evt) {
    evt.preventDefault();
    var altNav = $(".style-navbar").innerHeight();
    if ($(this).scrollTop() > altNav) {
        $("nav").addClass("cor-transicao-navbar");
    } else {
        $("nav").removeClass("cor-transicao-navbar");
    }

})


/*Função utilizada para contagem de caracteres*/
function contaCaracter(id) {

    $(id).click(function() {

        var caracter = $(this).text().length;

        log(caracter + " caracteres");
    })
}

$(".botao-duvidas").mouseenter(function(evt) {

    log("Botão ok.");

});


function log(item) {

    console.log(item);
}