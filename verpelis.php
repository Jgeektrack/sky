<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar péliculas</title>
</head>
<body>
        <?php
            $servidor = "127.0.0.1";
            $usuario = "root";
            $contrasena = "";  // crearemos variables para los datos del servidor
            $basededatos = "data_access";

            // Conexión al servidor
            $conn = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
            // Check connection
             if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }

              

              $sql = "SELECT * FROM multimedia";
          $result = mysqli_query($conn, $sql);

          if (!$result){
            echo "La consulta SQL contiene errores.".mysqli_error($con);
            exit();
        } else {
            echo "<table border='1'>
              <tr>
                <td>Type</td>
                <td>Title</td>
                <td>Author</td>
                <td>Format</td>
                <td>Duration</td>
                <td>Year</td>
              </tr>";
        
            //obtenemos los datos resultado de la consulta 
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                    <td>".$row['Type']."</td>
                    <td>".$row['Title']."</td>
                    <td>".$row['Author']."</td>
                    <td>".$row['Format']."</td>
                    <td>".$row['Duration']." Minutes</td>
                    <td>".$row['Year']."</td>
                </tr>";
            }
            echo "</table>";
        
            mysqli_free_result($result);
        }
            
            mysqli_close($conn); //cerrar sqli
        ?>
        <form action="meterdatos.php" metohd="post">
        <input type="submit" value="Volver a inicio">
        </form>
</body>
</html>