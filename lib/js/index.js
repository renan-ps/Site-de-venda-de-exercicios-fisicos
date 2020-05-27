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


function contaCaracter(id) {

    $(id).click(function() {

        var caracter = $(this).text().length;

        log(caracter + " caracteres");
    })
}


function log(item) {

    console.log(item);
}