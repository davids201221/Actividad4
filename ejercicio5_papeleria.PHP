<html>
    <head>
        
    </head>
    <body>
        <center>
            <h1> El precio total de tu compra es: </h1>
            <?php
            settype($cantidad, "integer");
            settype($precio, "integer");
            settype($costo, "integer");

            $cantidad = $_POST["cantidad"];
            $precio = 0;
            $costo = 0;
            if(($cantidad<10)){
                $precio = 2000;
                $costo = $cantidad*$precio;
            }
            if(($cantidad>10) && ($cantidad<30)){
                $precio = 1800;
                $costo = $cantidad*$precio;
            }
            if(($cantidad<30)){
                $precio = 1300;
                $costo = $cantidad*$precio;
            }
            echo"Compro ". $cantidad ." cuadernos". PHP_EOL. "<br/>";
            echo"Cada cuaderno le cuesta: $". $precio . PHP_EOL. "<br/>";
            echo"En total debe pagar: $". $costo . PHP_EOL. "<br/>";
            ?>
        </center>
    </body>
</html>