<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6</title>
        <link href="Act4_ejercicio1.css" rel="stylesheet">
        <center>
            <h1>Ejercicio 7 Registro autos - formulario registro autos - </h1>
            <?php
            echo"Registro de infomracion de usuarios ". PHP_EOL;
            ?>
            <form name="formularioDatos" method="POST" action="ejercicio7_registro_autos.PHP">
                <p>Datos personales</p><br/>
                <p>Introduzca su nombre completo: <input type="text" name="nombre" value=""></p><br/>
                <p>Introduzca su cedula de ciudadania completo: <input type="text" name="id" value=""></p><br/>
                <p>Introduzca su numero de celular: <input type="text" name="celular" value=""></p><br/>
                <p>Introduzca su correo electronico: <input type="text" name="correo" value=""></p><br/>
                <input value="Enviar" type="submit"/>
            </form>

        </center>
    </head>
</html>