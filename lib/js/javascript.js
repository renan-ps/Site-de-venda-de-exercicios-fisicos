//Máscaras do formulário de cadastro
$('#dataNascimento').on('focus', function () {
    var id=$(this).attr("id");
    if(id == "dataNascimento"){VMasker(document.querySelector("#dataNascimento")).maskPattern("99/99/9999")};
});

//Retorno do caminho absoluto (root)
function getRoot(){
    var root = "http://"+document.location.hostname+"/personal/";
    return root;
}

//Recaptcha
function getCaptcha(){
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lf-sP8UAAAAAJBsCaxkocgA4CfOaLlvGv-TyYfm', {action: 'login'}).then(function(token) {
            const gRecaptchaResponse = document.querySelector("#g-recaptcha-response").value=token;
        });
    });
};

getCaptcha();


//Ajax do formulário de cadastro
$("#formCadastro").on("submit", function(event){
    event.preventDefault(); //evita refresh da página
    var dados = $(this).serialize(); //envia os dados do input

    $.ajax({
       url: getRoot()+'controllers/controllerCadastro',
       type: 'post',
       dataType: 'json',
       data: dados,
       success: function (response) {
           $('.retornoCad').empty();
           if (response.retorno == "erro"){
               getCaptcha();
               $.each(response.erros,function(key,value){
                   $('.retornoCad').append(value+'<br>');
               });
           }else{
               $('.retornoCad').append('Cadastro realizado com sucesso!');
           }
       }
    });
});


//Ajax do formulário de login
$("#formLogin").on("submit", function(event){
    event.preventDefault(); //evita refresh da página
    var dados = $(this).serialize(); //envia os dados do input

    $.ajax({
        url: getRoot()+'controllers/controllerLogin',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
          //console.log(response);
            if (response.retorno == 'success'){
                window.location.href=response.page;
                alert("ok");
            }else{
                alert("erro");
                getCaptcha();
                if(response.tentativas == true){
                    $('.form-login').hide();
                }
                $('.resultadoForm').empty();
                $.each(response.erros,function(key, value){
                   $('.resultadoForm').append(value+'<br>')
                });
            }
        }
    });
});


// CapsLock
/*
$("#senha").keypress(function(e){
    kc=e.keyCode?e.keyCode:e.which;
    sk=e.shiftKey?e.shiftKey:((kc==16)?true:false);
    if(((kc>=65 && kc<=90) && !sk)||(kc>=97 && kc<=122)&&sk){
        $(".resultadoForm").html("Capslock Ligado");
    }else{
        $(".resultadoForm").empty();
    }
});*/
