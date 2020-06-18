$("document").ready(function() {
    animaValor("basico")
    animaValor("premium")
    animaValor("advanced");

})


/*BÁSICO*/

/**
 * Scroll effect
 * 
 * Ao scrollar a página até a altura da imagem, o efeito acontece na imagem
 * Ao rolar a página, também é chamada a função que anima o valor(animaValor())
 * 
 */

$(window).on("scroll", function() {

    if ($(this).scrollTop() > 280) {

        $(".img-plano-basico").find(".retina-plano-basico").css({
            opacity: "1",
            boxShadow: "inset 0 0 100px 100px rgba(0, 0, 0, .5)",
            transition: "all 0.4s cubic-bezier(0.6, -0.28, 0.735, 0.045)"
        })

        $(".img-plano-basico").find("p").addClass("animate__animated animate__zoomInDown")

        $(".img-plano-basico").find(".avaliacao-plano-basico").css({
            opacity: "1",
            transition: "all 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045)"
        }).addClass("animate__animated animate__zoomInDown");



        setTimeout(function() {

            $(".img-plano-basico img").css({ transform: "scale(1.3)" });
        }, 200)

    }
})


/*PREMIUM*/

/**
 * Scroll effect
 * 
 * Ao scrollar a página até a altura da imagem, o efeito acontece na imagem
 * Ao rolar a página, também é chamada a função que anima o valor(animaValor())
 * 
 */

$(window).on("scroll", function() {

    if ($(this).scrollTop() > 280) {

        $(".img-plano-premium").find(".retina-plano-premium").css({
            opacity: "1",
            boxShadow: "inset 0 0 100px 100px rgba(0, 0, 0, .5)",
            transition: "all 0.4s cubic-bezier(0.6, -0.28, 0.735, 0.045)"
        })

        $(".img-plano-premium").find("p").addClass("animate__animated animate__bounceInRight")

        $(".img-plano-premium").find(".avaliacao-plano-premium").css({
            opacity: "1",
            transition: "all 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045)"
        }).addClass("animate__animated animate__bounceInUp");

        $(".img-plano-premium").find(".img-top-seller").addClass("animate__animated animate__rotateInDownRight")

        setTimeout(function() {

            $(".img-plano-premium img").css({ transform: "scale(1.3)" });
        }, 200)

    }
})


/*ADVANCED*/

/**
 * Scroll effect
 * 
 * Ao scrollar a página até a altura da imagem, o efeito acontece na imagem.
 * Ao rolar a página, também é chamada a função que anima o valor(animaValor())
 */

$(window).on("scroll", function() {

    if ($(this).scrollTop() > 280) {

        $(".img-plano-advanced").find(".retina-plano-advanced").css({
            opacity: "1",
            boxShadow: "inset 0 0 100px 100px rgba(0, 0, 0, .5)",
            transition: "all 0.4s cubic-bezier(0.6, -0.28, 0.735, 0.045)"
        })

        $(".img-plano-advanced").find("p").addClass("animate__animated animate__fadeInTopRight")

        $(".img-plano-advanced").find(".avaliacao-plano-advanced").css({
            opacity: "1",
            transition: "all 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045)"
        }).addClass("animate__animated animate__rotateInUpLeft");


        setTimeout(function() {

            $(".img-plano-advanced img").css({ transform: "scale(1.3)" });
        }, 200)

    }
})


function animaValor(classe) {

    setInterval(function() {

        $(".valor-plano-" + classe + " p").addClass("animate__animated animate__tada");

    }, 4000)

    setInterval(function() {

        $(".valor-plano-" + classe + " p").removeClass("animate__animated animate__tada");

    }, 4600)
}