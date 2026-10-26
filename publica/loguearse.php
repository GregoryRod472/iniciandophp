<?php
    session_start();
    $_SESSION["username"] = "Gregory";
    header("Location: /usuarios.php");
?>