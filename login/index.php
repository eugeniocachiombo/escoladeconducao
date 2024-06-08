<?php include "../inclusao/head.php"; ?>

<div class="principal">
    <div class="logo" style="display: flex; align-items: center; justify-content: center; font-size: 50px;">
        <?php include "../inclusao/logo.php"; ?>
    </div>

    <div class="form-login" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <div>
            <?php include "../login/processa_formulario.php"; ?>
        </div>

        <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
            <?php include "../login/form-login.php"; ?>
        </div>
    </div>
</div>
<?php include "../inclusao/foot.php"; ?>