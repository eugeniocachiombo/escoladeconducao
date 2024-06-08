<?php
session_start(); 
require_once '../dao/conexao.php'; 

if (isset($_POST["btnLogar"])) {
    if (isset($_POST["emailTel"]) && isset($_POST["passe"])) {
        
        $emailTel = $_POST["emailTel"];
        $passe = $_POST["passe"];
        
        $conexao = getConexao();
        $stmt = $conexao->prepare("select * FROM usuario WHERE email = :email OR numero_de_telefone = :telefone AND palavra_passe = :passe AND acesso = 'admin' ");
        $stmt->bindParam(':email', $emailTel);
        $stmt->bindParam(':telefone', $emailTel);
        $stmt->bindParam(':passe', $passe);
        $stmt->execute();
        
        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch();
            $_SESSION["usuario"] = $usuario;
            $_SESSION["usuario_id"] = $usuario["id"];
            echo "<script> window.location.pathname = 'escoladeconducao/inicio'; </script>";
        } else {
            $erro = "Credenciais inválidas. Por favor, tente novamente.";
        }
    } else {
        $erro = "Por favor, preencha todos os campos.";
    }
}
?>

<?php if (isset($erro)) { ?>
    <div class="top-element" style="text-align: center; background-color: #edd4da; color: #571524; padding: 10px; border-radius: 5px; margin-bottom: 10px;"><?php echo $erro; ?></div>
<?php } ?>