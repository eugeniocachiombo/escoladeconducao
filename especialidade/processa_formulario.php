<?php include "../dao/especialidadeDao.php"; ?>

<?php // Cadastrar
if (isset($_POST["btnCadastrar"] )) {
    $especialidade = $_POST["especialidade"];

    $novaEspecialidade = new Especialidade($especialidade);
    $especialidadeDao = new EspecialidadeDao();
    $resultado = $especialidadeDao->cadastrarEspecialidade($novaEspecialidade);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Especialidade cadastrada com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao cadastrar especialidade. Por favor, tente novamente.</div>';
    }
}
?>

<?php // Atualizar
if (isset($_POST["btnActualizar"] )) {
    $id = $_GET["id"];
    $especialidade = $_POST["especialidade"];

    $especialidadeAtualizada = new Especialidade($especialidade);
    $especialidadeAtualizada->setId($id);
    
    $especialidadeDao = new EspecialidadeDao();
    $resultado = $especialidadeDao->atualizarEspecialidade($especialidadeAtualizada);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Dados da especialidade atualizados com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao atualizar dados da especialidade. Por favor, tente novamente.</div>';
    }
}
?>

<?php // Listar Para Atualizar
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $especialidadeDao = new EspecialidadeDao();
    $especialidade = $especialidadeDao->buscarEspecialidadePorId($id);
}
?>

<?php  // Excluir
if (isset($_POST["btnEliminar"])) {
    $id = $_POST["id"];
    $especialidadeDao = new EspecialidadeDao();
    $resultado = $especialidadeDao->eliminarEspecialidade($id);

    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Especialidade excluída com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao excluir especialidade. Por favor, tente novamente.</div>';
    }
}
?>
