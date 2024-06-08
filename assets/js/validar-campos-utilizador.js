document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        var nome = document.querySelector('input[name="nome"]');
        var dataNascimento = document.querySelector('input[name="data_nascimento"]');
        var genero = document.querySelector('select[name="genero"]');
        var email = document.querySelector('input[name="email"]');
        var palavraPasse = document.querySelector('input[name="palavra_passe"]');
        var numeroTelefone = document.querySelector('input[name="numero_de_telefone"]');
        var numeroSecundario = document.querySelector('input[name="numero_secundario"]');
        
        var camposVazios = [];

        if (!nome.value) {
            camposVazios.push(nome);
        }
        if (!dataNascimento.value) {
            camposVazios.push(dataNascimento);
        }
        if (!genero.value) {
            camposVazios.push(genero);
        }
        if (!email.value) {
            camposVazios.push(email);
        }
        if (!palavraPasse.value) {
            camposVazios.push(palavraPasse);
        }
        if (!numeroTelefone.value) {
            camposVazios.push(numeroTelefone);
        }
        if (!numeroSecundario.value) {
            camposVazios.push(numeroSecundario);
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