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

<?php if (isset($_SESSION["usuario_id"])) { ?>
 
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
                </ul>
            </li>
            <li>
                <a href="#">Veículo</a>
                <ul>
                    <li><a href="../veiculo/form-cadastro.php">Cadastrar</a></li>
                    <li><a href="../veiculo">Listar</a></li>
                </ul>
            </li>
            <li><a href="#">Sobre</a></li>
        </ul>
    </nav>
</header>

<?php } ?>