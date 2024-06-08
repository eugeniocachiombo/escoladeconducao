<?php include "../inclusao/head.php"; ?>
<?php include "../inclusao/header.php"; ?>
<?php include "../regras_sessao/somente-logado.php"; ?>
<link rel="stylesheet" href="../assets/css/inputs.css">
<?php include "../aluno/processa_formulario.php"; ?>

<main style="display: flex; justify-content: center;">
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse; margin-top: 5px; margin-bottom: 20px;">
        <caption style="text-align: left; margin-bottom: 20px;">
            <h1><span><i class="fas fa-list"></i></span>Lista de alunos</h1>
        </caption>

        <thead style="background-color: cadetblue;color: white">
            <tr>
                <th style="width: 5%;">ID</th>
                <th style="width: 20%;">Nome</th>
                <th style="width: 10%;">Data de Nascimento</th>
                <th style="width: 5%;">Gênero</th>
                <th style="width: 20%;">Email</th>
                <th style="width: 15%;">Número de Telefone</th>
                <th style="width: 15%;">Número Secundário</th>
                <th style="width: 5%;">Editar</th>
                <th style="width: 5%;">Eliminar</th>
            </tr>
        </thead>

        <tbody style="font-weight: bold; ">
            <?php
            $alunoDao = new AlunoDao();
            $alunos = $alunoDao->listarAlunos();
            foreach ($alunos as $aluno) {
                echo "<tr>";
                    echo "<td style='text-align: center'>{$aluno['id']}</td>";
                    echo "<td style='text-align: center'>{$aluno['nome']}</td>";
                    echo "<td style='text-align: center'>{$aluno['data_nascimento']}</td>";
                    echo "<td style='text-align: center'>{$aluno['genero']}</td>";
                    echo "<td style='text-align: center'>{$aluno['email']}</td>";
                    echo "<td style='text-align: center'>{$aluno['numero_de_telefone']}</td>";
                    echo "<td style='text-align: center'>{$aluno['numero_secundario']}</td>";
                    echo "<td style='text-align: center'><a href='form-editar.php?id={$aluno['id']}'> Editar </a></td>";
                    echo "<td style='text-align: center'>"; ?>
                    <form method="POST" style="display: flex; justify-content: center; align-items: center;">
                        <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">
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