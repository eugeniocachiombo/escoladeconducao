<?php include "../dao/adminDao.php"; ?>

<?php // Cadastrar
if (isset($_POST["btnCadastrar"] )) {
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];
    $palavraPasse = $_POST["palavra_passe"];
    $numeroTelefone = $_POST["numero_de_telefone"];
    $numeroSecundario = $_POST["numero_secundario"];

    $admin = new Admin($nome, $dataNascimento, $genero, 'admin', $email, $palavraPasse, $numeroTelefone, $numeroSecundario);
    $adminDao = new AdminDao();
    $resultado = $adminDao->cadastrarAdmin($admin);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Administrador cadastrado com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao cadastrar administrador. Por favor, tente novamente.</div>';
    }
}
?>

<?php // Atualizar
if (isset($_POST["btnActualizar"] )) {
    
    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];
    $numeroTelefone = $_POST["numero_de_telefone"];
    $numeroSecundario = $_POST["numero_secundario"];

    $admin = new Admin($nome, $dataNascimento, $genero, 'admin', $email, null, $numeroTelefone, $numeroSecundario);
    $admin->setId($id);
    $adminDao = new AdminDao();
    $resultado = $adminDao->atualizarAdmin($admin);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Dados do administrador atualizados com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao atualizar dados do administrador. Por favor, tente novamente.</div>';
    }
}
?>

<?php // Listar Para Atualizar
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $adminDao = new AdminDao();
    $dadosAdmin = $adminDao->listarAdminID($id);
}
?>

<?php  // Eliminar
if (isset($_POST["btnEliminar"])) {
    $id = $_POST["id"];
    $adminDao = new AdminDao();
    $resultado = $adminDao->eliminarAdmin($id);

    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Administrador eliminado com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao eliminar administrador. Por favor, tente novamente.</div>';
    }
}
?>
