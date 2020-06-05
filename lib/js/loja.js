$("document").ready(function() {

    var produto = $(".produto")

    var tela = $(window).width();

    if (tela >= 1100) {

        transparente(".container-produto");

        produto.mouseenter(function(evt) {

            evt.preventDefault()
            var id = $(this).attr("id")

            if (id === "1") {

                $(this).find(".container-produto").fadeToggle(200);
                $(this).find(".img-propaganda-1-1").fadeOut(200);
                setTimeout(function() {
                    $(".img-propaganda-1-2").fadeIn(100);

                }, 199);
            }
            if (id === "2") {

                $(this).find(".container-produto").fadeToggle(200);
                $(this).find(".img-propaganda-2-1").fadeOut(200);
                setTimeout(function() {
                    $(".img-propaganda-2-2").fadeIn(100);

                }, 200);
            } else
            if (id === "3") {

                $(this).find(".container-produto").fadeToggle(200);
                $(this).find(".img-propaganda-3-1").fadeOut(200);
                setTimeout(function() {
                    $(".img-propaganda-3-2").fadeIn(100);

                }, 200);
            }


        })

        produto.mouseleave(function() {

            var id = $(this).attr("id")

            if (id === "1") {

                $(this).find(".container-produto").fadeToggle(100);
                $(this).find(".img-propaganda-1-2").fadeOut(100);
                setTimeout(function() {
                    $(".img-propaganda-1-1").fadeIn(100);

                }, 100);
            }
            if (id === "2") {

                $(this).find(".container-produto").fadeToggle(100);
                $(this).find(".img-propaganda-2-2").fadeOut(100);
                setTimeout(function() {
                    $(".img-propaganda-2-1").fadeIn(100);

                }, 100);
            } else
            if (id === "3") {

                $(this).find(".container-produto").fadeToggle(100);
                $(this).find(".img-propaganda-3-2").fadeOut(100);
                setTimeout(function() {
                    $(".img-propaganda-3-1").fadeIn(100);

                }, 100);
            }

        })
    }
})


/*Função utilizada para escoder uma classe ou id*/
function transparente(classe) {

    $(classe).hide()
}