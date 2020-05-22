/*$(function(){

	mouseOverEffect();
})*/

var imageEffect = $(".image-effect img");


imageEffect.on("mouseenter", function() {

    $(this).addClass("efeito-grid-js");

});

imageEffect.on("mouseleave", function() {

    $(this).removeClass("efeito-grid-js");

});




/*function mouseOverEffect(element){

	$(element).on("mouseenter", function(event){

		$(this).addClass("aumenta-elemento");   
	});

	$(element).on("mouseleave", function(event){

		$(this).removeClass("aumenta-elemento");   
	});

}*/





function contaCaracter(id) {

    $().click(function() {

        var caracter = $(this).text().length;

        log(caracter + " caracteres");
    })
}


function log(item) {

    console.log(item);
}










//e.stopPropagation(); ver