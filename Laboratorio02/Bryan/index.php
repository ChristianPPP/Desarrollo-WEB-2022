<html>
  <head>
    <title>Formulario para la adopción de un gato</title>
  </head>
  <style>
    body {
      background:#F1F1F1;
    }
    h1{
      text-align:center;
    }
  </style>

  <body>
    <h1>Formulario para la adopción de un gato</h1>
   
    <form action="index.php" method="POST" enctype="multipart/form-data">
      <label> Nombre del solicitante:
          <input type="text" name="nombre">
      </label>
    <br>
    <br>
      <label> Apellido del solicitante:
        <input type="text" name="apellido">
      </label>
    <br>
      
    <br>
      <label> Edad:
        <input type="number" name="edad">
      </label>
    <br>

    <p>Mascota favorita:
              <input type="radio" name="mascota" value="Perro"> perro
              <input type="radio" name="mascota" value="Gato"> gato
              <input type="radio" name="mascota" value="Conejo"> conejo
    </p>
      
    <br>
      <label> Correo Electronico:
        <input type="text" name="correo">
      </label>
    <br>
      
    <br>
      <label> Numero de telefono:
        <input type="number" name="telefono">
      </label>
    <br>

    <br>
      <label>Mascota de referencia:<br>
      <input type="file" name="archivo">
      </label><br>

    <p>Matriz de adopcion, cuenta con:</p>
            <label>
              <input type="checkbox" name="adopcion[]" value="lugarAmplio">
              Lugar Amplio<br>
              <input type="checkbox" name="adopcion[]" value="arena">
              Caja de arena<br>
              <input type="checkbox" name="adopcion[]" value="escalar">
              Torres para escalar<br>
              <input type="checkbox" name="adopcion[]" value="comida">
              Comida<br>
    </label>

    <p>Razon por la cual adoptas un gato: </p>
      <textarea name="mensaje" cols="50" rows="5"></textarea>
    <br>
    <br>
      <button type="submit">Enviar</button>

    </form>



    <?php 

      $nombre = $_REQUEST['nombre'];
      $apellido = $_REQUEST['apellido'];
      $edad = $_REQUEST['edad'];
      $mascota = $_REQUEST['mascota'];
      $correo = $_REQUEST['correo'];
      $telefono = $_REQUEST['telefono'];
      $adopcion = $_REQUEST['adopcion'];
      $mensaje = $_REQUEST['mensaje'];
      
      $archivo = $_FILES['archivo'];
      echo "<pre>";
      //var_dump($archivo);
      
      $patch = $_SERVER['DOCUMENT_ROOT'].'/imagen/'.$archivo['name'];
      move_uploaded_file($archivo['tmp_name'],$patch);
      
      $estado = $_REQUEST['estado'];
      $mensaje = $_REQUEST['mensaje'];
      
      echo "<center><h2>Informacion enviada del solicitante</h1></center>";
      echo "El nombre del solicitante es: $nombre <br>";
      echo "El apellido del solicitante es: $apellido <br>";
      echo "La edad del solitante es: $edad <br>";
      echo "La mascota favorita es: $mascota <br>";
      echo "El Correo electronico es: $correo <br>";
      echo "El numero de telefono es: $telefono <br>";
      echo "<p>Recursos del solicitante: </p>"; 
            if($adopcion)
            {
              foreach($adopcion as $adopcion)
                {
                  echo "<ul>
                          <li>
                              $adopcion
                          </li>
                      </ul>";
                };
            }else{
              echo "Ninguna opcion fue seleccionada";
            }
      
      echo "La razon de adopcion es: $mensaje <br>";
      
      echo "<p>Referencia de adopcion: </p>";
      
      if($archivo['name']!="")
         {
            $pathx = "../imagen/";
            $file = $archivo['name'];
           echo ' <center> <img src="'.$pathx.$file.'", width="300" height="150"></center>';
         }
 
    ?> 
  </body>
</html>  