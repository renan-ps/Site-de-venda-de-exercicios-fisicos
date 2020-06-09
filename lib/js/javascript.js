//Máscaras do formulário de cadastro
VMasker(document.querySelector("#dataNascimento")).maskPattern("99/99/9999")


//Recaptcha
function getCaptcha(){
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lf-sP8UAAAAAJBsCaxkocgA4CfOaLlvGv-TyYfm', {action: 'login'}).then(function(token) {
            const gRecaptchaResponse = document.querySelector("#g-recaptcha-response").value=token;
        });
    });
};

getCaptcha();