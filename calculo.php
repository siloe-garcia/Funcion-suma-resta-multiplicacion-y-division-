<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body style="background-image: url(https://us.123rf.com/450wm/irrrina/irrrina1606/irrrina160600010/57840889-matem%C3%A1ticas-papel-gastado-fondo-blanco-de-%C3%A9poca-antigua-de-cerca.jpg?ver=6);">
    
</body>
</html>
<?php
    if(isset($_GET['submit'])){
        //se crea la variable para el indice dado por el usuario a traves del formulario
        $n1=$_GET['n1'];
        $n2=$_GET['n2'];
        $n3=$_GET['n3'];
        $n4=$_GET['n4'];
        $valores=[$n1,$n2,$n3,$n4];
        ?>
        <a  style="background-color:crimson; text-decoration:none; color: white;" href="index.php">Cambiar los valores</a>
        <h2>Calculadora</h2>
       
        <p>¿Que operación aritmetica deseas realizar con los valores que escribiste?</p>
        <!--Se crean 2 formularios con el metodo post para agarrar los datos del array-->
        <form action="suma.php" method="GET">
            <label for="valor">Valores:</label>
            <input type="text"  name="valores" id="valores" value="<?php echo  implode("+",$valores) ?>">        
            <input style=" background-color:deepskyblue"type="submit" name="suma" value="Sumar"><br><br>
        </form>
        <form action="resta.php" method="GET">
            <label for="valor">Valores:</label>
            <input type="text" name="valores" id="valores" value="<?php echo implode("-",$valores) ?>">        
            <input style=" background-color:blueviolet" type="submit" name="resta" value="Restar"><br><br>
        </form>
        <form action="multiplicacion.php" method="GET">
            <label for="valor">Valores:</label>
            <input type="text" name="valores" id="valores" value="<?php echo implode("*",$valores) ?>">        
            <input style=" background-color:chartreuse" type="submit" name="multiplicacion" value="Multiplicar"><br><br>
        </form>
        <form action="division.php" method="GET">
            <label for="valor">Valores:</label>
            <input type="text" name="valores" id="valores" value="<?php echo implode("/",$valores) ?>">        
            <input style=" background-color:hotpink" type="submit" name="division" value="Dividir"><br><br>
        </form>      
      <?php       
    }    

    
?>