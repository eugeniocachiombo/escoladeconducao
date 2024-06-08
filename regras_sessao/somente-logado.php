<?php
if (!empty($_SESSION["usuario"])) {
    echo "<script> window.location.pathname = 'escoladeconducao/'; </script>";
}
?>