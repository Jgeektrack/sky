<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data access</title>
</head>
<body>
        <?php
            $usuario = "root";
            $contrasena = "";  // crearemos variables para los datos del servidor
            $servidor = "127.0.0.1";
            $basededatos = "data_access";
            $peliculagenero = $_POST['peliculagenero'];
            $peliculatitulo = $_POST['peliculatitulo'];
            $peliculaautor = $_POST['peliculaautor'];
            $peliculaformato = $_POST['peliculaformato'];
            $peliculaaño = $_POST['peliculaaño'];
            $peliculaduracion = $_POST['peliculaduracion'];

             // Create connection
             $conn = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
            // Check connection
             if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }
            
             $sql = "INSERT INTO multimedia VALUES ('$peliculagenero', '$peliculatitulo', '$peliculaautor', '$peliculaformato', $peliculaduracion, $peliculaaño)";
            if (mysqli_query($conn, $sql)) {
            echo "Película añadida correctamente";
             } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
            mysqli_close($conn);

         ?>

        <form action="meterdatos.php" method="post">   
        <input type="submit" value="Volver a inicio">
        </form>

    
    
</body>
</html>