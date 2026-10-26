<?php
    session_start();
    
    if (isSet( $_SESSION["username"])){
        include "con-usuario.php";
    }else{
        include "sin-usuario.php";
    }
        
?>