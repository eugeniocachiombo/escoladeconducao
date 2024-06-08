<?php include "../dao/alunoDao.php"; ?>

<?php // Cadastrar
if (isset($_POST["btnCadastrar"] )) {
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];
    $palavraPasse = $_POST["palavra_passe"];
    $numeroTelefone = $_POST["numero_de_telefone"];
    $numeroSecundario = $_POST["numero_secundario"];

    $aluno = new Aluno($nome, $dataNascimento, $genero, 'aluno', $email, $palavraPasse, $numeroTelefone, $numeroSecundario);
    $alunoDao = new AlunoDao();
    $resultado = $alunoDao->cadastrarAluno($aluno);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Aluno cadastrado com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao cadastrar aluno. Por favor, tente novamente.</div>';
    }
}
?>

<?php // Actualizar
if (isset($_POST["btnActualizar"] )) {
    
    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];
    $numeroTelefone = $_POST["numero_de_telefone"];
    $numeroSecundario = $_POST["numero_secundario"];

    $aluno = new Aluno($nome, $dataNascimento, $genero, 'aluno', $email, null, $numeroTelefone, $numeroSecundario);
    $aluno->setId($id);
    $alunoDao = new AlunoDao();
    $resultado = $alunoDao->atualizarAluno($aluno);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Dados do aluno actualizado com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao actualizar dados do aluno. Por favor, tente novamente.</div>';
    }
}
?>

<?php // Listar Para Actualizar
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $alunoDao = new AlunoDao();
    $dadosAluno = $alunoDao->listarAlunosID($id);
}
?>