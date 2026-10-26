<h1>Bienvenidos a mi pagina web</h1>
<?php
        $esteaño = date("Y");
    echo "===================\n";
    echo "Hola a todos\n";
    echo "===================\n";
    $nombre = readline("Como te llamas? ");
    $edad = readline("Cual es tu año de nacimiento? ");
    $edad = $esteaño - $edad;
    printf("%s, tienes %1.0f años, ¿es asi?", $nombre, $edad);
    //echo("Bienvenido $nombre, tienes $edad años de edad");
?>

<h2>Genial, tienes <?= $edad ?> años de edad.... Vuelve pronto</h2>