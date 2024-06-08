<?php include "../dao/veiculoDao.php"; ?>

<?php // Cadastrar
if (isset($_POST["btnCadastrar"] )) {
    $placa = $_POST["placa"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];

    $veiculo = new Veiculo($placa, $modelo, $ano);
    $veiculoDao = new VeiculoDao();
    $resultado = $veiculoDao->cadastrarVeiculo($veiculo);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Veículo cadastrado com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao cadastrar veículo. Por favor, tente novamente.</div>';
    }
}
?>

<?php // Actualizar
if (isset($_POST["btnActualizar"] )) {
    $placa = $_GET["placa"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];

    $veiculo = new Veiculo($placa, $modelo, $ano);
    $veiculoDao = new VeiculoDao();
    $resultado = $veiculoDao->actualizarVeiculo($veiculo);
    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Dados do veículo actualizados com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao actualizar dados do veículo. Por favor, tente novamente.</div>';
    }
}
?>

<?php // Listar Para Actualizar
if (isset($_GET["placa"])) {
    $placa = $_GET["placa"];
    $veiculoDao = new VeiculoDao();
    $dadosVeiculo = $veiculoDao->buscarVeiculoPorPlaca($placa);
}
?>

<?php  // Excluir
if (isset($_POST["btnEliminar"])) {
    $placa = $_POST["placa"];
    $veiculoDao = new VeiculoDao();
    $resultado = $veiculoDao->excluirVeiculo($placa);

    if ($resultado) {
        echo '<div style="text-align: center; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Veículo excluído com sucesso!</div>';
    } else {
        echo '<div style="text-align: center; background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 10px;">Erro ao excluir veículo. Por favor, tente novamente.</div>';
    }
}
?>
