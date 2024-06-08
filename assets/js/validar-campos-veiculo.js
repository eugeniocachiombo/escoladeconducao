document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        var placa = document.querySelector('input[name="placa"]');
        var modelo = document.querySelector('input[name="modelo"]');
        var ano = document.querySelector('input[name="ano"]');
        
        var camposVazios = [];

        if (!placa.value) {
            camposVazios.push(placa);
        }
        if (!modelo.value) {
            camposVazios.push(modelo);
        }
        if (!ano.value || isNaN(ano.value)) { // Verifica se o valor não é um número
            camposVazios.push(ano);
        }

        camposVazios.forEach(function(campo) {
            campo.style.border = '2px solid red';
        });

        if (camposVazios.length > 0) {
            event.preventDefault();
            alert("Por favor, preencha todos os campos corretamente.");
        }
    });

    form.addEventListener('input', function(event) {
        event.target.style.border = '';
    });
});
