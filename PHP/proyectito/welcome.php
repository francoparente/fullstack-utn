<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en clase</title>
</head>
<body>
    
    <form action="procesar_datos.php" method="post">
        Name: <input type="text" name="nombre" placeholder="ej. Pepito Grillo"><br>
        E-mail: <input type="email" name="email" placeholder="ej. pepito_grillo@mail.com"><br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>