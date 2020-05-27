$("document").ready(function() {
    transparente(".container-produto");
})

var produto = $(".produto")

/*Troca a imagem do produto ao passar o mouse sobre o elemento 'produto'*/
produto.mouseenter(function(evt) {
    evt.preventDefault();

    var id = $(this).attr("id")

    if (id === "1") {

        $(this).find(".container-produto").fadeToggle(400);
        $(this).find("img").removeAttr("src", "image/blusa-produto-frente.jpeg")
            .attr("src", "image/blusa-produto-verso.jpeg");
    }
    if (id === "2") {

        $(this).find(".container-produto").fadeToggle(400);
        $(this).find("img").removeAttr("src", "image/img-equipamento-loja.jpg")
            .attr("src", "image/img-equipamento-loja-2.jpg");
    } else
    if (id === "3") {

        $(this).find(".container-produto").fadeToggle(400);
        $(this).find("img").removeAttr("src", "image/img-treino-loja.jpg")
            .attr("src", "image/img-treino-loja-2.jpeg");
    }
})

/*Destroca a foto ao retirar o mouse de sobre o elemento 'produto'*/
produto.mouseleave(function(evt) {
    evt.preventDefault();

    var id = $(this).attr("id");

    if (id === "1") {

        $(this).find(".container-produto").fadeToggle(300);
        $(this).find("img").removeAttr("src", "image/blusa-produto-verso.jpeg")
            .attr("src", "image/blusa-produto-frente.jpeg");

    }
    if (id === "2") {

        $(this).find(".container-produto").fadeToggle(300);
        $(this).find("img").removeAttr("src", "image/img-equipamento-loja-2.jpg")
            .attr("src", "image/img-equipamento-loja.jpg");

    } else
    if (id === "3") {

        $(this).find(".container-produto").fadeToggle(300);
        $(this).find("img").removeAttr("src", "image/img-treino-loja-2.jpeg")
            .attr("src", "image/img-treino-loja.jpg");
    }

});

/*Função utilizada para escoder uma classe ou id*/
function transparente(classe) {

    $(classe).hide()
}