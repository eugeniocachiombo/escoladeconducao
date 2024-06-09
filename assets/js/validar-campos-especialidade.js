document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        var especialidade = document.querySelector('input[name="especialidade"]');
        var camposVazios = [];

        if (!especialidade.value) {
            camposVazios.push(especialidade);
        }

        camposVazios.forEach(function(campo) {
            campo.style.border = '2px solid red';
        });

        if (camposVazios.length > 0) {
            event.preventDefault();
            alert("Por favor, preencha o campo corretamente.");
        }
    });

    form.addEventListener('input', function(event) {
        event.target.style.border = '';
    });
});
