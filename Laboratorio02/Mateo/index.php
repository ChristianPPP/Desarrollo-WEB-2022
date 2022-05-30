<html>
  <head>
    <title>FORMULARIO MATEO CUEVA LAB_03</title>
  </head>
  <style>
    body {
 background-image:  url(https://irp-cdn.multiscreensite.com/792e81af/MOBILE/images/f7d703b0-7447-4d22-adbb-877468b81005.jpg);
        background-repeat: no-repeat;
        background-size:cover;
    }
    .container{
      display:flex;
    justify-content: center;
    align-items: center;
    padding: 15px;  
  }
    .ec {

    text-align:center;
    float: left;
    top: 30px;
      margin-right:100px;
    }
    h1{
      text-align:center;
    }
   
    
    
  </style>

  <body>
    <div class="container">
          <img src = img/EC.png class= ec style="width:90px; heigth:90px">

      <h1>SOLICITUD DE PRESTAMO</h1>      
    </div>
      
    
      <form class="formu" action="index.php" method="POST" enctype="multipart/form-data">
      <label> Nombre:
          <input type="text" name="nombre" placeholder="Ingrese su nombre">
      </label>
    <br>
    <br>
      <label> Apellido:
        <input type="text" name="apellido" placeholder="Ingrese su apellido">
      </label>
    <br>
    <br>
      <label> Edad:
        <input type="number" name="edad" placeholder="Ingrese su edad">
      </label>
    <br>
       <br>
      <label> Número de CI:
        <input type="number" name="ci" placeholder="Ingrese su número de cedula">
      </label>
    <br>
    
      <p>Seleccione su genero:</p>
      <label> Másculino:
        <input type="radio" name="genero" value="másculino">
      </label>
      <label> Femenino:
        <input type="radio" name="genero" value="femenino">
      </label>
    <br>
    <br>
      <label> Dirección exacta del domicilio:
      <input type="text" name="direccion" placeholder="Ingrese su direccíon">
      </label>
        <br>
    <p>Cuenta con un trabajo estable:</p>
      <label>
      Si
      <input type="radio" name="trabajo" value="si">
      </label>
      <label>
        No
      <input type="radio" name="trabajo" value="no">
      </label>
    <br>
    <br>
      <label>Foto de perfil:
      <input type="file" name="archivo">
      </label>
    <br>
    <p>Seleccione su estado civil: </p>
      <select name="estado">
        <option value="soltero">Soltero</option>
        <option value="casado" selected >Casado</option>
      </select>
    <br>
    <p>Info adicional: </p>
      <textarea name="mensaje" cols="50" rows="5"></textarea>
    <br>
    <br>
      <button type="submit">Enviar</button>

    </form>
      




    <?php 
    
    // USO DE FORMULARIOS 

    // SE RECOMIENDA UTILIZAR POST

    // $_REQUEST ES PARA CUANDO NO SE SABE SI UTILIZAR POST O GET
    $nombre = $_REQUEST['nombre'];

    $apellido = $_REQUEST['apellido'];

    $edad = $_REQUEST['edad'];

    $ci = $_REQUEST['ci'];

    $genero = $_REQUEST['genero'];

    $direccion = $_REQUEST['direccion'];

    $trabajo = $_REQUEST['trabajo'];

    $archivo = $_FILES['archivo'];
  echo "<pre>";
    //var_dump($archivo);

    $patch = $_SERVER['DOCUMENT_ROOT'].'/img/'.$archivo['name'];

    move_uploaded_file($archivo['tmp_name'],$patch);



    $estado = $_REQUEST['estado'];

    $mensaje = $_REQUEST['mensaje'];
    echo "DATOS DEL SOLICITANTE <br>";

    if($archivo['name']!="")
       {
          $pathx = "../img/";
          $file = $archivo['name'];
          echo '<img src="'.$pathx.$file.'" style="width:150px; heigth:150px">';
       }
    echo "<br>";
    echo "El nombre del solicitante es: $nombre <br>";
    echo "El apellido del solicitante es: $apellido <br>";
    echo "La edad del solicitante es: $edad <br>";
    echo "El número de CI del solicitante es: $ci <br>";
    echo "El genero del solicitante es: $genero <br>";
    echo "La dirección exacta del solicitante es:$direccion <br>";
    echo "El solicitante cuenta con trabajo:$trabajo <br>";
   echo "El estado civil del solicitante es: $estado <br>";
   echo "Info adicional: $mensaje <br>";
   
    
    ?> 
  </body>
</html>