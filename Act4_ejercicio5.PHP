<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
        <link href="Act4_ejercicio1.css" rel="stylesheet">
        <center>
            <h1>Ejercicio 5 Papeleria - Registro cuadernos - </h1>
            <?php
            echo"Precio de cuadernos". PHP_EOL;
            ?>
            <form name="formularioDatos" method="POST" action="ejercicio5_papeleria.PHP">
                <p>Calcula el costo de tus cuadernos</p><br/>
                <p>Digite la cantidad de cuadernos que desea comprar: <input type="text" name="cantidad" value=""/></p>
                <br/>
                <input value="Calcular" type="submit"/>
            </form>        
        </center>
    </head>
</html>