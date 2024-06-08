<link rel="stylesheet" href="../assets/css/inputs.css">

<form action="" method="post" style="width: inherit; display: flex; justify-content: center; align-items: center;">
    <div class="formulario">
        <h1>Autenticar</h1>
        <hr> <br>
        <label for="input" class="text">Email ou Telefone:</label>
        <input type="text" placeholder="Usuário" name="emailTel" class="input"> <br>

        <label for="input" class="text">Palavra-passe:</label>
        <input type="password" placeholder="******" name="passe" class="input"> <br>

        <button name="btnLogar"> Entrar </button> <br>
        <a href="../admin/form-cadastro.php" style="text-align: center; text-decoration: none;">Cadastrar-se</a>
        <script src="../assets/js/validar-campos-utilizador-login.js"></script>
    </div>
</form>