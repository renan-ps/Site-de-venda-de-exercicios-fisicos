//Máscaras do formulário de cadastro
VMasker(document.querySelector("#dataNascimento")).maskPattern("99/99/9999")

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