<?php include "../inclusao/head.php"; ?>
<?php include "../inclusao/header.php"; ?>
<?php include "../regras_sessao/somente-logado.php"; ?>
<link rel="stylesheet" href="../assets/css/inputs.css">
<?php include "../especialidade/processa_formulario.php"; ?>

<main>
    <form action="" method="post" style="width: 50%;">
        <div class="form-principal" style="display: flex; flex-direction: column; justify-content: space-evenly; align-items: center; ">
            <div class="formulario top-element" style="width: 100%;">
                <h3>Cadastrar Especialidade</h3> 
                <hr> <br>
                <label for="especialidade" class="text" style="margin-bottom: 10px;">Especialidade:</label>
                <input type="text" placeholder="Especialidade" name="especialidade" class="input" style="margin-bottom: 10px;"> <br>
                <button type="submit" name="btnCadastrar" style="margin-bottom: 10px;">Cadastrar</button>
            </div>
        </div>
    </form>

    <div style="width: 50%;">
        <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse; margin-top: 5px; margin-bottom: 20px;">
            <caption style="text-align: left; margin-bottom: 20px;">
                <h1><span><i class="fas fa-list"></i></span>Lista de especialidades</h1>
            </caption>

            <thead class="left-element" style="background-color: cadetblue;color: white">
                <tr>
                    <th style="width: 10%;">ID</th>
                    <th style="width: 70%;">Especialidade</th>
                    <th style="width: 10%;">Eliminar</th>
                </tr>
            </thead>

            <tbody class="right-element" style="font-weight: bold; ">
                <?php
                $especialidadeDao = new EspecialidadeDao();
                $especialidades = $especialidadeDao->listarEspecialidades();
                foreach ($especialidades as $especialidade) {
                    echo "<tr>";
                    echo "<td style='text-align: center'>{$especialidade['id']}</td>";
                    echo "<td style='text-align: center'>{$especialidade['especialidade']}</td>";
                    echo "<td style='text-align: center'>"; ?>
                    <form method="POST" style="display: flex; justify-content: center; align-items: center;">
                        <input type="hidden" name="id" value="<?php echo $especialidade['id']; ?>">
                        <input type="submit" name="btnEliminar" value="Eliminar" style="background-color: none; color: red; cursor: pointer; font-weight: bold; font-size: small; margin: 5px;">
                    </form> <?php
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
            </tbody>
        </table>
    </div>
</main>
<script src="../assets/js/validar-campos-especialidade.js"></script>



<?php include "../inclusao/footer.php"; ?>
<?php include "../inclusao/foot.php"; ?>
