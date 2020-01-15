<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meter datos en phpmyadmin</title>
</head>
<body>
<h2>Videoclub el Águila 3</h2>
    <form action="entrada.php" method="post">
                Introduce nombre de película que quiera añadir: <input type="text" name="peliculatitulo"><br>
                Introduce el género de la película: <input type="text" name="peliculagenero"><br>
                Introduce el autor de la película: <input type="text" name="peliculaautor"><br>
                Introduce el formato que tiene la película: <input type="text" name="peliculaformato"><br>
                Introduce el año de la película: <input type="text" name="peliculaaño"><br>
                Introduce la duración de la película: <input type="text" name="peliculaduracion"><br>
                <input type="submit" value="Crear Película">
    </form>
    <br>
    <form action="verpelis.php" metohd="post">
        <input type="submit" value="Ver Películas">
    </form>

    <form action="borrarpelis.php" metohd="post">
        <input type="submit" value="Borrar Película">
    </form>

    
</body>
</html>