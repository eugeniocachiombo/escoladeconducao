<?php include "../inclusao/head.php";?>
<?php include "../inclusao/header.php";?>
<?php include "../regras_sessao/somente-logado.php";?>
<link rel="stylesheet" href="../assets/css/inputs.css">

<?php include "../veiculo/processa_formulario.php";?>

<main>
    <form action="" method="post" style="width: 100%;">
        <div class="form-principal" style="display: flex; justify-content: space-evenly; align-items: center;">

            <div class="logo left-element" style="display: flex; align-items: center; justify-content: center; font-size: 40px;">
                <span class="nome-escola" style="font-family: TH Charmonman; font-weight: bold;">
                    <span><i class="fas fa-car"></i></span>Cadastrar Veículo
                </span>
            </div>

            <div class="formulario top-element">
                <label for="placa" class="text">Placa: </label>
                <input type="text" placeholder="Placa" name="placa" class="input"> <br>

                <label for="modelo" class="text">Modelo:</label>
                <input type="text" placeholder="Modelo" name="modelo" class="input"> <br>
            </div>

            <div class="formulario right-element">
            <label for="ano" class="text">Ano:</label>
                <input type="text" placeholder="Ano" name="ano" class="input"> <br>
                <button type="submit" name="btnCadastrar">Cadastrar</button>
            </div>
        </div>
    </form>
    <script src="../assets/js/validar-campos-veiculo.js"></script>
</main>

<?php include "../inclusao/footer.php";?>
<?php include "../inclusao/foot.php";?>
