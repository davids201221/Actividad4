<?php
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];

    echo"<h2>La informacion del usuario: </h2>";
    echo"El nombre recibido es: ". $nombres ."<br/>";
    echo"El apellido recibido es: ". $apellidos ."<br/>";

    if(isset($_POST['submit'])){
        if(empty($nombres)){
            echo "<p class='error'>* agrega tu nombre </p>";
        }
    }
    if(isset($_POST['submit'])){
        if(empty($apellidos)){
            echo "<p class='error'>* agrega tu apellido </p>";
        }
    }

?>