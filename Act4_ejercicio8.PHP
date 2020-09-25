<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
    <link href="Act4_ejercicio1.css" rel="stylesheet">
    <h1>Ejercicio 8 Registro consultores - AGC Consultores - </h1>
</head>
<center>
    <body>
        <h2>Directorio telefonico</h2>
        <?php
        $titulos=array("NIT", "Nombre_empresa", "Direccion", "Ciudad", "Telefono", "Nombre_contacto", "Correo");
        $nit=array("900899110", "Incomineria", "carrera 5 no 6-07", "Madrid", "5274331", "Elkin", "correo1@gmail.com");
        $nombre_empresa=array("900899111", "Partequipos", "carrera 6 no 7-08", "Mosquera", "5274332", "Sebastian", "correo2@gmail.com");
        $direccion=array("900899112", "Dromos", "carrera 4 no 5-06", "Funza", "5274333", "Paola", "correo3@gmail.com");
        $ciudad=array("900899113", "Metalmecanicas", "carrera 9 no 10-11", "Bogota", "5274334", "Sandra", "correo4@gmail.com");
        $telefono=array("900899114", "Navitrans", "carrera 8 no 9-10", "Cota", "5274330", "Patricia", "correo5@gmail.com");
        $nombre_contacto=array("900899115", "Gecolsa", "carrera 7 no 8-09", "Bojaca", "5274335", "David", "correo7@gmail.com");
        $correo=array("900899116", "Nissan", "carrera 87 no 8-09", "Tunja", "5274336", "Juan", "correo6@gmail.com");
        $directorio=array($nit, $nombre_empresa, $direccion, $ciudad, $telefono, $nombre_contacto, $correo);
        ?>
        <table border="1" widtht="60%" cellspacing="0">
            <?php
            echo"<tr>";
            foreach($titulos as $titulo){
                echo"<td>$titulo</td>";
            }
            echo"</tr>";
            foreach($directorio as $fila){
                echo"<tr>";
                foreach($fila as $llave=>$celda){
                    echo"<td>$celda</td>";
                }
            }
            echo"</tr>";
            ?>
        </table>
    </body>
</center>
</html>