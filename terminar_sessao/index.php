<?php
    session_start();
    session_destroy(); 
    setcookie("fadeInAnimation", "", time() - 3600, "/");
    echo "<script> window.location.pathname = 'escoladeconducao/'; </script>";
?>