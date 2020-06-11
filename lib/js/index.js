var href = $(".effect-scroll");


/*Scrolla a página ao clicar em alguma opção do menu na navbar até o elemento escolhido(scrollspy)*/
href.click(function(evt) {
    evt.preventDefault();
    var id = $(this).attr("id");
    var distancia = $(id).offset().top;

    var altNav = $("#style-navbar").innerHeight();

    $("html, body").animate({

        scrollTop: distancia - altNav

    }, 600)
});



/*Mutação de cor no navbar ao scrollar da página */
$(window).scroll(function(evt) {
    evt.preventDefault();
    if ($(this).scrollTop() > 50) {
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


function log(item) {

    console.log(item);
}