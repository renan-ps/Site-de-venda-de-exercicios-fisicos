var href = $(".effect-scroll");


/*Scrolla a página ao clicar em alguma opção do menu na navbar até o elemento escolhido(scrollspy)*/
href.click(function(evt) {
    evt.preventDefault();
    var id = $(this).attr("id");
    var distancia = $(id).offset().top;

    var altNav = $("#dynamic-navbar").innerHeight();

    $("html, body").animate({

        scrollTop: distancia - altNav

    }, 600)
});