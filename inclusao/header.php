<?php session_start(); ?>

<style>
    header {
        background-color: cadetblue;
        min-height: 20vh;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
    }

    .logotipo {
        font-size: 24px;
        font-weight: bold;
        color: white;
        text-decoration: none;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav ul li {
        margin-right: 20px;
        position: relative;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        padding: 10px;
        display: block;
    }

    nav ul li ul {
        display: none;
        position: absolute;
        background-color: cadetblue;
        min-width: 120px;
        z-index: 1;
    }

    nav ul li:hover ul {
        display: block;
    }

    nav ul li ul li {
        margin: 0;
    }

    nav ul li:hover a {
        background-color: darkcyan;
    }

    nav ul li ul li:hover a {
        background-color: darkslategray;
    }
</style>

<header>
    <a href="#" class="logotipo" style="font-size: 35px;">
        <?php
        include "../inclusao/logo.php";
        ?>
    </a>
    <nav>
        <ul>
            <li><a href="../inicio/">Inicio</a></li>
            <li>
                <a href="#">Aluno</a>
                <ul>
                    <li><a href="../aluno/form-cadastro.php">Cadastrar</a></li>
                    <li><a href="../aluno">Listar</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Instrutor</a>
                <ul>
                    <li><a href="../instrutor/form-cadastro.php">Cadastrar</a></li>
                    <li><a href="../instrutor">Listar</a></li>
                    <li><a href="../instrutor/especializar.php">Especializar</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Especialidades</a>
                <ul>
                    <li><a href="../especialidade">Listar</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Veículo</a>
                <ul>
                    <li><a href="../veiculo/form-cadastro.php">Cadastrar</a></li>
                    <li><a href="../veiculo">Listar</a></li>
                </ul>
            </li>
            <li><a href="../terminar_sessao/index.php">Terminar Sessão</a></li>
        </ul>
    </nav>
</header>

<div style="background-color: rgb(36, 59, 59); color: white; padding: 5px;">
    <?php
    $usuario = $_SESSION["usuario"];
    ?>
    <i class="fas fa-user"></i><b> <?php echo ucfirst($usuario["nome"]); ?> </b>
</div>