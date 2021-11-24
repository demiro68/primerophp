<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer programa en PHP</title>
</head>
<body>
    <?
    $datos = array ("Daniel","Emiro","53 años","Deportes y juegos","VIsual Studio Code");
    echo "<h1>Primer programa en php</h1>";
    //echo PHP_OS;
    ?>
    
    <form action="">
        <label for="">Nombre:</label>
        <span><? echo $datos[0]; ?></span><br>

        <label for="">Apellido:</label>
        <span><? echo $datos[1]; ?></span><br>
        
        <label for="">Edad:</label>
        <span><? echo $datos[2]; ?></span><br>

        <label for="">Hobbie:</label>
        <span><? echo $datos[3]; ?></span><br>

        <label for="">Editor de Codigo Preferido:</label>
        <span><? echo $datos[4]; ?></span><br>
        <label for="">Ssitema Operativo utilizado:</label>
        <span><? echo PHP_OS; ?></span><br>
        

    </form>
    
</body>
</html>