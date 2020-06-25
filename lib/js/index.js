/*Mutação de cor no navbar ao scrollar da página */
$(window).scroll(function(evt) {
    evt.preventDefault();
    if ($(this).scrollTop() > 3) {
        $("nav").addClass("cor-transicao-navbar");
    } else {
        $("nav").removeClass("cor-transicao-navbar");
    }

})

/*Ao clicar no botão hamburguer do dropdown, essa função add se não houver ou remove se houver a classe que dar cor ao mesmo*/
$(".navbar-toggler").click(function() {

    $("nav").stop().toggleClass("cor-dropdown");
});



/*Função utilizada para contagem de caracteres*/
function contaCaracter(id) {

    $(id).click(function() {

        var caracter = $(this).text().length;

        log(caracter + " caracteres");
    })
}