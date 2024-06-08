document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        var passe = document.querySelector('input[name="passe"]');
        var emailTel = document.querySelector('input[name="emailTel"]');
        
        var camposVazios = [];

        if (!passe.value) {
            camposVazios.push(passe);
        }
        if (!emailTel.value) {
            camposVazios.push(emailTel);
        }
       
        camposVazios.forEach(function(campo) {
            campo.style.border = '2px solid red';
        });

        if (camposVazios.length > 0) {
            event.preventDefault();
            alert("Por favor, preencha todos os campos.");
        }
    });
   
    form.addEventListener('input', function(event) {
        event.target.style.border = '';
    });
});