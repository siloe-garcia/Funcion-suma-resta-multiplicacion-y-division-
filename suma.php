<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body style="background-image: url(https://us.123rf.com/450wm/irrrina/irrrina1606/irrrina160600010/57840889-matem%C3%A1ticas-papel-gastado-fondo-blanco-de-%C3%A9poca-antigua-de-cerca.jpg?ver=6);">
    <a  style="background-color:crimson; text-decoration:none; color: white;" href="index.php">Cambiar los valores</a>
</body>
</html>
<?php
    //Se obtienen los datos enviados a traves del formulario
    $valores=$_GET;
    //se valida con la funcion isset y se presenta el arreglo
    if (isset($_GET['valores'])) {
        $valores = explode("+",$_GET['valores']);
     }else{
        $valores = array('valores');
     }
    
     array_push($valores);
    
        echo '<h1 style="text-align: center;"> RESULTADO </h1>';
     
    //---------------------------------Se crea la funcion suma---------------------------------------
    function Suma($valores){
        //se declara la variable con elementos en posicion inicial 0
        $suma = $valores[0];
        //se rrecorren los elementos del arreglo con un for
        for ($i=1; $i < count($valores); $i++) { 
            $suma = $suma + $valores[$i];
        }
        //retorna el resultado
        return $suma;
    }
    //Se ivoca a la funcion 
    $suma = Suma($valores);
    echo "<h2>El resultado de la operacion es </h2> <input type='text' value='$suma'>";

?>