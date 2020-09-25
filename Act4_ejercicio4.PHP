<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link href="Act4_ejercicio1.css" rel="stylesheet">
    <h1>Ejercicio 4 Pedidos - Formulario de pedidos - </h1>
</head>
<center>
<?php
echo"Los precios son: ",PHP_EOL. "<br/>";
    echo"1. Coca Cola: $1.000", PHP_EOL . "<br/>";
    echo"2. Pepsi Cola: $1.500", PHP_EOL. "<br/>";
    echo"3. Fanta naranja: $1.300", PHP_EOL. "<br/>";
    echo"4. Manzana: $2.000", PHP_EOL;
?>
<form name="formularioDatos" method="POST" action="ejercicio4_formulario_pedidos.PHP">
    <p>Puedes calcular el costo de tu pedido</p><br/>
    <p>Elige la opcion del producto a comprar: <input type="text" name="codigo" value=""/></p><br/>
    <p>Elige la cantidad del producto a comprar: <input type="text" name="cantidad" value=""/></p><br/>
    <input value="Enviar" type="submit"/>
</form>
</center>
</html>