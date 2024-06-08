<?php include "../dao/instrutorDao.php"; ?>

<?php // Cadastrar
if (isset($_POST["btnCadastrar"] )) {
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];
    $palavraPasse = $_POST["palavra_passe"];
    $numeroTelefone = $_POST["numero_de_telefone"];
    $numeroSecundario = $_POST["numero_secundario"];

    $instrutor = new Instrutor($nome, $dataNascimento, $genero, 'instrutor', $email, $palavraPasse, $numeroTelefone, $numeroSecundario);
    $instrutorDao = new InstrutorDao();
    $resultado = $instrutorDao->cadastrarInstrutor($instrutor);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Instrutor cadastrado com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao cadastrar instrutor. Por favor, tente novamente.</div>';
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

    $instrutor = new Instrutor($nome, $dataNascimento, $genero, 'instrutor', $email, null, $numeroTelefone, $numeroSecundario);
    $instrutor->setId($id);
    $instrutorDao = new InstrutorDao();
    $resultado = $instrutorDao->atualizarInstrutor($instrutor);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Dados do instrutor atualizados com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao atualizar dados do instrutor. Por favor, tente novamente.</div>';
    }
}
?>

<?php // Listar Para Atualizar
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $instrutorDao = new InstrutorDao();
    $dadosInstrutor = $instrutorDao->listarInstrutorID($id);
}
?>

<?php  // Eliminar
if (isset($_POST["btnEliminar"])) {
    $id = $_POST["id"];
    $instrutorDao = new InstrutorDao();
    $resultado = $instrutorDao->eliminarInstrutor($id);

    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Instrutor eliminado com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao eliminar instrutor. Por favor, tente novamente.</div>';
    }
}
?>
