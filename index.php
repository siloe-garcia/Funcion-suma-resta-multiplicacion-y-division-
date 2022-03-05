<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de funciones</title>
</head>
<body style="background-image: url(https://us.123rf.com/450wm/irrrina/irrrina1606/irrrina160600010/57840889-matem%C3%A1ticas-papel-gastado-fondo-blanco-de-%C3%A9poca-antigua-de-cerca.jpg?ver=6);" >
    <h1 style="text-align: center;">Bienvenido a la calculadora</h1>
    <h2>Calculadora de funciones</h2>
    <p style="color: red;" >Digita los 4 valores que vas a (sumar,restar,multiplicar o dividir) entre 1-100</p>
    <form action="calculo.php">
        <label for="n1">Numero 1:</label>
        <input type="number" name="n1" id="n1" min="1" max="100"><br>
        <label for="n1">Numero 2:</label>
        <input type="number" name="n2" id="n2" min="1" max="100"><br>
        <label for="n1">Numero 3:</label>
        <input type="number" name="n3" id="n3" min="1" max="100"><br>
        <label for="n1">Numero 4:</label>
        <input type="number" name="n4" id="n4" min="1" max="100"><br><br>
        <input  style="background-color:darkorange" type="submit" value="Procesar" name="submit">
        
    </form>
    <div>
    
</body>
</html>