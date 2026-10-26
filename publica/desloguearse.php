<?php
    session_start();
    unSet($_SESSION["username"]);

    session_destroy();
    header("Location:/usuarios.php");

?>