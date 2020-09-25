<html>
    <head>
    </head>
    <body>
        <center>
            <h1>Carrito de compras: </h1>
            <?php
            $codigo = $_POST["codigo"];
            $cantidad = $_POST["cantidad"];
            $costo = 0;
            if($codigo==1){
                echo"Elegiste: ". $cantidad ." Coca Colas"."<br/>";
                $costo = $cantidad*1000;
            }
            if($codigo==2){
                echo"Elegiste: ". $cantidad ." Pepsis"."<br/>";
                $costo = $cantidad*1500;
            }
            if($codigo==3){
                echo"Elegiste: ". $cantidad ." Fanta naranja"."<br/>";
                $costo = $cantidad*1300;
            }
            if($codigo==4){
                echo"Elegiste: ". $cantidad ." Manzana"."<br/>";
                $costo = $cantidad*2000;
            }
            echo"Entonces tu cuenta es de: $". $costo;
            ?>
        </center>
    </body>
</html>