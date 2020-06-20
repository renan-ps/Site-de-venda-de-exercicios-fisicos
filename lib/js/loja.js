var produto = $(".produto")

var tela = $(window).width();

/*Efeito de aparecer uma barra com a opção de "saiba mais" e "favoritos" ao passar e retirar a barra ao tirar o mouse*/
if (tela >= 1100) {

    transparente(".container-produto");

    produto.mouseenter(function() {

        $(this).find(".container-produto").stop().fadeToggle(300);
    })

    produto.mouseleave(function() {

        $(this).find(".container-produto").stop().fadeToggle(200);
    })
}


/*Marca e desmarca a opção favorito*/
$(".favorito-produto").click(function(evt) {
    evt.preventDefault();
    $(this).toggleClass("favorito-produto-active")
})


/*Função utilizada para escoder uma classe ou id*/
function transparente(classe) {

    $(classe).hide()
}