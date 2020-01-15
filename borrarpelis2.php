<?php
            $servidor = "127.0.0.1";
            $usuario = "root";
            $contrasena = "";  // crearemos variables para los datos del servidor
            $basededatos = "data_access";
            $borrar = $_POST['borrarpelicula'];

            // Conexión al servidor
            $conn = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
            // Check connection
             if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }

            
              

              $sql = "DELETE FROM multimedia WHERE title = '$borrar'";
          if (mysqli_query($conn, $sql)) {
            echo "Película eliminada correctamente";
             } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
            
            mysqli_close($conn); //cerrar sqli
        ?>
        <form action="meterdatos.php" metohd="post">
        <input type="submit" value="Volver a inicio">
        </form>