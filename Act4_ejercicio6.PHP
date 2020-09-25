<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6</title>
        <link href="Act4_ejercicio1.css" rel="stylesheet">
        <center>
            <h1>Ejercicio 6 Calculadora - Registro suma - </h1>
            <?php
            echo"Suma de numeros pares en el rango de los enteros". PHP_EOL . "<br/>";
            ?>
            <?php
            settype($suma, "integer");
            settype($i, "integer");
            $suma = 0;
            $i = 0;
            for($i = 2; $i<1000; $i+=2){
                $suma = $suma+$i;
            }
            echo"La suma total es: ". $suma . PHP_EOL;
            ?>
        </center>
    </head>
</html>