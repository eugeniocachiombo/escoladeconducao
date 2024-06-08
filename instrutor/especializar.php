<?php include "../inclusao/head.php"; ?>
<?php include "../inclusao/header.php"; ?>
<?php include "../regras_sessao/somente-logado.php"; ?>
<link rel="stylesheet" href="../assets/css/inputs.css">
<?php include "../instrutor/processa_formulario.php"; ?>

<main>
<form action="" method="post" style="width: 50%;">
    <div class="form-principal" style="display: flex; flex-direction: column; justify-content: space-evenly; align-items: center; ">
        <div class="formulario top-element" style="width: 100%;">
            <h3>Cadastrar Especialidade</h3> 
            <hr> <br>

            <label for="especialidade_id" class="text" style="margin-bottom: 10px;">Selecione a especialidade:</label>
            <select class="select" name="especialidade_id" style="margin-bottom: 10px;">
            <option value="" style="display: none;">Selecione...</option>
                <?php
                    $especialidadeDao = new EspecialidadeDao();
                    $especialidades = $especialidadeDao->listarEspecialidades();
                    foreach ($especialidades as $especialidade) {
                        echo "<option value='{$especialidade['id']}'>{$especialidade['especialidade']}</option>";
                    }
                ?>
            </select>
            
            <label for="usuario_id" class="text" style="margin-bottom: 10px;">Selecione o usuário:</label>
            <select class="select" name="usuario_id" style="margin-bottom: 10px;">
            <option value="" style="display: none;">Selecione...</option>
                <?php
                    $instrutorDao = new InstrutorDao();
                    $instrutores = $instrutorDao->listarInstrutores();
                    foreach ($instrutores as $instrutor) {
                        $usuarioEspecialidadeDao = new UsuarioEspecialidadeDao();
                        $resultado = $usuarioEspecialidadeDao->buscarRelacaoUsuarioPorId($instrutor["id"]);
                        if (!$resultado) {
                            echo "<option value='{$instrutor['id']}'>{$instrutor['nome']}</option>";
                        }
                    }
                ?>
            </select>
            
            <button type="submit" name="btnEspecializar" style="margin-bottom: 10px;">Especializar</button>
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
                    <th style="width: 20%;">Instrutor</th>
                    <th style="width: 30%;">Especialidade</th>
                    <th style="width: 10%;">Eliminar</th>
                </tr>
            </thead>

            <tbody class="right-element" style="font-weight: bold; ">
                <?php
                $usuarioEspecialidadeDao = new UsuarioEspecialidadeDao();
                $especializacoes = $usuarioEspecialidadeDao->listarRelacoesUsuarioEspecialidade();
                
                
                foreach ($especializacoes as $especializacao) {
                    $especialidade = $especialidadeDao->buscarEspecialidadePorId($especializacao['especialidade_id']);
                    $instrutor = $instrutorDao->listarInstrutorID($especializacao['usuario_id']);

                    echo "<tr>";
                    echo "<td style='text-align: center'>{$especializacao["id"]}</td>";
                    echo "<td style='text-align: center'>{$instrutor["nome"]}</td>";
                    echo "<td style='text-align: center'>{$especialidade["especialidade"]}</td>";
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
