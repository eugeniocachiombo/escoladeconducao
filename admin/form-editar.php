<?php include "../inclusao/head.php"; ?>
<?php include "../inclusao/header.php"; ?>
<link rel="stylesheet" href="../assets/css/inputs.css">

<?php include "../admin/processa_formulario.php"; ?> <!-- Alterado para o arquivo de processamento de administração -->

<main>
    <form method="post" style="width: 100%;">
        <div class="form-principal" style="display: flex; justify-content: space-evenly; align-items: center;">

            <div class="logo" style="display: flex; align-items: center; justify-content: center; font-size: 40px;">
                <span class="nome-escola" style="font-family: TH Charmonman; font-weight: bold;">
                    <span><i class="fas fa-user"></i></span>Atualizar Administrador <!-- Alterado para Atualizar Administrador -->
                </span>
            </div>

            <div class="formulario">
                <label for="nome" class="text">Nome: </label>
                <input value="<?php echo $dadosAdmin["nome"] ?>" type="text" placeholder="Nome completo" name="nome" class="input"> <br>

                <label for="data_nascimento" class="text">Data de Nascimento:</label>
                <input value="<?php echo $dadosAdmin["data_nascimento"] ?>" type="date" name="data_nascimento" class="input"> <br>

                <label for="genero" class="text">Gênero:</label>
                <select name="genero" class="input select">
                    <option style="display: none;" value="">Selecione...</option>
                    <?php if ($dadosAdmin["genero"]  == "M") { ?>
                        <option selected value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    <?php } else { ?>
                        <option value="M">Masculino</option>
                        <option selected value="F">Feminino</option>
                    <?php  } ?>

                </select> <br>

                <label for="email" class="text">Email:</label>
                <input value="<?php echo $dadosAdmin["email"] ?>" type="email" placeholder="email@exemplo.com" name="email" class="input">
            </div>

            <div class="formulario">
                <label for="numero_de_telefone" class="text">Número de Telefone:</label>
                <input value="<?php echo $dadosAdmin["numero_de_telefone"] ?>" type="text" maxlength="9" placeholder="Número de telefone" name="numero_de_telefone" class="input"> <br>

                <label for="numero_secundario" class="text">Número Secundário:</label>
                <input value="<?php echo $dadosAdmin["numero_secundario"] ?>" type="text" maxlength="9" placeholder="Número secundário" name="numero_secundario" class="input"> <br>
                <button type="submit" name="btnActualizar">Actualizar</button> <!-- Alterado para Atualizar -->
            </div>
        </div>
    </form>
    <script src="../assets/js/validar-campos-utilizador-editar.js"></script>
</main>

<?php include "../inclusao/footer.php"; ?>
<?php include "../inclusao/foot.php"; ?>