<html>
  <head>
    <title>Registro de citas médicas</title>
  </head>
  <style>
    body {
      background:rgba(142, 143, 135, 0.4);
      
    }
    h1{
      text-align:center;
    }
    
  </style>

  <body>
    <h1>Citas médicas</h1>
    <h2>Datos del paciente</h2>
    <form action="index.php" method="POST" enctype="multipart/form-data">
      <label>Foto de perfil:
      <input type="file" name="archivo">
      </label>
    <br>
      <p>Elija la especialidad médica</p>
      <label>
      Odontología
      <input type="checkbox" name="roles[]" value="Odontología">
      Neurología
      <input type="checkbox" name="roles[]" value="Neurología">
      Cardiología
      <input type="checkbox" name="roles[]" value="Cardiología">
      </label>
      Dermatología
      <input type="checkbox" name="roles[]" value="Dermatología">
      </label>
    <br>
    <br>
      <label> Ingrese los nombres y apellidos del paciente:
          <input type="text" name="nombre">
      </label>
    <br>
    <br>
      <label> Ingrese la edad del paciente:
        <input type="number" name="edad">
      </label>
    <br>
    <br>
       <label>Género <br> Másculino:
        <input type="radio" name="genero" value="másculino">
      </label>
      <label> Femenino:
        <input type="radio" name="genero" value="femenino">
      </label>
    <br>
      <br>
       <p>Seleccione su estado civil: </p>
       <select name="estado">
        <option value="casado">Casado</option>
        <option value="divorciado">Divorciado</option>
        <option value="viudo">Viudo</option>
        <option value="Soltero" selected >Soltero</option>
      </select>
    <br>
      <br>
      <label> Correo electrónico del paciente:
        <input type="text" name="correo">
      </label>
    <br>
    <br>
      
      <label> Ingrese la provincia a la que pertenece el paciente:
        <input type="text" name="provincia">
      </label>
    <br>
    <br>
      <label> Ingrese la ciudad a la que pertenece el paciente:
        <input type="text" name="ciudad">
      </label>
      <br>
    <br>
      <label> Ingrese la dirección domiciliaria del paciente:
        <input type="text" name="direccion">
      </label>
      <br>
    <br>
      <label> Ingrese teléfono convencional del paciente:
        <input type="number" name="convencional">
      </label>
      <br>
    <br>
      <label> Ingrese  el número de celular del paciente:
        <input type="number" name="celular">
      </label>
      <br>
    <br>
    <p>Observaciones: </p>
      <textarea name="observaciones" cols="50" rows="5"></textarea>
    <br>
    <br>
      <button type="submit">Enviar</button>

    </form>




    <?php 
    
    // USO DE FORMULARIOS 

    // SE RECOMIENDA UTILIZAR POST

    // $_REQUEST ES PARA CUANDO NO SE SABE SI UTILIZAR POST O GET
$archivo = $_FILES['archivo'];
  echo "<pre>";
    //var_dump($archivo);

    $patch = $_SERVER['DOCUMENT_ROOT'].'/img/'.$archivo['name'];

    move_uploaded_file($archivo['tmp_name'],$patch);
 $especialidades = $_REQUEST['roles'];

    $nombre = $_REQUEST['nombre'];

    $apellido = $_REQUEST['edad'];


    $genero = $_REQUEST['genero'];

    $estado = $_REQUEST['estado'];

    $correo = $_REQUEST['correo'];

    $provincia = $_REQUEST['provincia'];

    $ciudad = $_REQUEST['ciudad'];

    $direccion = $_REQUEST['direccion'];

    $convencional = $_REQUEST['convencional'];

    $celular = $_REQUEST['celular'];

    $observaciones = $_REQUEST['observaciones'];
 if($archivo['name']!="")
   {
      $pathx = "../img/";
      $file = $archivo['name'];
      echo '<img src="'.$pathx.$file.'", style="height: 250px;
    width: 225px;
    ">';
     
   }
echo "<br>";
echo "<br>";
echo "La cita médica será para la especialidad de:";
 if($especialidades)
    {
        foreach($especialidades as $especialidad)
        {
          echo " $especialidad";
        }
    }
echo "<br>";
    echo "Los nombres del paciente son: $nombre <br>";
    echo "La edad del paciente es: $genero <br>";
    echo "El estado civil del paciente es: $estado <br>";
    echo "El correo electrónico del paciente es: $correo <br>";
echo "La provincia a la que pertenece el paciente es: $provincia <br>";
echo "La ciudad a la que pertenece el paciente es: $ciudad <br>";
echo "La dirección domiciliaria del paciente es: $direccion <br>";
echo "El teléfono convencional del paciente es: $convencional <br>";
echo "El número de celular del paciente es: $celular <br>";
   echo "Observaciones: $observaciones <br>";
echo "<br>";
   
    
