<html>
    <head>

    </head>
    <body>
        <center>
            <h1>Registro de informacion</h1>
            <?php
            settype($nombre, "string");
            settype($id, "integer");
            settype($celular, "integer");
            settype($correo, "string");
            $id = 0;
            $celular = 0;
            $nombre = $_POST["nombre"];
            $id = $_POST["id"];
            $celular = $_POST["celular"];
            $correo = $_POST["correo"];
            echo "Nombre: ". $nombre .PHP_EOL. "<br/>";
            echo "Cedula: ". $id .PHP_EOL. "<br/>";
            echo "Celular: ". $celular .PHP_EOL. "<br/>";
            echo "Correo: ". $correo .PHP_EOL. "<br/>";
            ?>
        </center>
    </body>
</html>