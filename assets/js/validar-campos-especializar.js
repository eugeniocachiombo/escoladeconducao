document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        var especialidade_id = document.querySelector('select[name="especialidade_id"]');
        var usuario_id = document.querySelector('select[name="usuario_id"]');
        
        var camposVazios = [];

        if (!especialidade_id.value) {
            camposVazios.push(especialidade_id);
        }
        if (!usuario_id.value) {
            camposVazios.push(usuario_id);
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
