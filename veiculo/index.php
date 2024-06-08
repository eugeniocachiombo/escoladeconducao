<?php include "../inclusao/head.php"; ?>
<?php include "../inclusao/header.php"; ?>
<?php include "../regras_sessao/somente-logado.php"; ?>
<link rel="stylesheet" href="../assets/css/inputs.css">
<?php include "../veiculo/processa_formulario.php"; ?>

<main style="display: flex; justify-content: center;">
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse; margin-top: 5px; margin-bottom: 20px;">
        <caption style="text-align: left; margin-bottom: 20px;">
            <h1><span><i class="fas fa-list"></i></span>Lista de veículos</h1>
        </caption>

        <thead class="left-element" style="background-color: cadetblue;color: white">
            <tr>
                <th style="width: 20%;">Placa</th>
                <th style="width: 40%;">Modelo</th>
                <th style="width: 20%;">Ano</th>
                <th style="width: 10%;">Editar</th>
                <th style="width: 10%;">Eliminar</th>
            </tr>
        </thead>

        <tbody style="font-weight: bold; ">
            <?php
            $veiculoDao = new VeiculoDao();
            $veiculos = $veiculoDao->listarVeiculos();
            foreach ($veiculos as $veiculo) {
                echo "<tr>";
                    echo "<td style='text-align: center'>{$veiculo['placa']}</td>";
                    echo "<td style='text-align: center'>{$veiculo['modelo']}</td>";
                    echo "<td style='text-align: center'>{$veiculo['ano']}</td>";
                    echo "<td style='text-align: center'><a href='form-editar.php?placa={$veiculo['placa']}'> Editar </a></td>";
                    echo "<td style='text-align: center'>"; ?>
                    <form method="POST" style="display: flex; justify-content: center; align-items: center;">
                        <input type="hidden" name="placa" value="<?php echo $veiculo['placa']; ?>">
                        <input type="submit" name="btnEliminar" value="Eliminar" style="background-color: none; color: red; cursor: pointer; font-weight: bold; font-size: small; margin: 5px;">
                    </form> <?php
                    echo "</td>"; 
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</main>

<?php include "../inclusao/footer.php"; ?>
<?php include "../inclusao/foot.php"; ?>
