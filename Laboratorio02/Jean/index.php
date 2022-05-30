<html>
  <head>
    <title>Formulario de registro de equipo</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
      .inputsStyle{
        border-radius:5px;
      }
      .buttonStyle{
        border-radius:5px;
        background-color: #F0F8F;
      }
        .formContainer{
            background-color: #6495ED;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 500px;
            height: 800px;
            border-radius:15px;
            margin:15px;
            padding:15px;
        }
      
    </style>
  </head>
  <body>
     <h1>Formulario de registro de equipo</h1>
    <div class="formContainer">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <label>Nombre del equipo:</label><br>
             <input class="inputsStyle" type="text" name="nombre" size="20"><br>
             <br><label>Nombre del representante:</label><br>
             <input class="inputsStyle" type="text" name="representante" size="20"><br><br>
          <label>Cedula del representante:</label><br>
             <input class="inputsStyle" type="text" name="cedula" size="20"><br><br>
             <label> Numero de jugadores: </label><br>
            <input class="inputsStyle" type="number" name="jugadores" min="3" max="15">
            <p>Division:
              <input class="inputsStyle" type="radio" name="division" value="Primera"> Primera
              <input class="inputsStyle" type="radio" name="division" value="Segunda"> Segunda
              <input class="inputsStyle" type="radio" name="division" value="Tercera"> Tercera
            </p>
            <p>Seleccione el deporte: 
            <select name="deporte">
                <option value="Futbol">Futbol</option>
                <option value="Volley">Volley</option>
                <option value="Basketball">Basketball</option>
                <option value="Tennis">Tennis</option>
            </select><br><br>
              <label>Logo del equipo:<br>
      <input type="file" name="archivo">
      </label><br><br>
    <br>
              <label>Numero de torneos jugados: </label>
<input type="range" name="torneo"  min="1" max="5" step="1">
              <output  for="torneo"></output><br><br>
              <label>Sede:</label><br>
             <input class="inputsStyle" type="text" name="sede" size="20"><br>
            </p>
          <p>Lugares visitados</p>
            <label>
              <input type="checkbox" name="canchas[]" value="Atahualpa">
                Atahualpa<br>
              <input type="checkbox" name="canchas[]" value="Bernaveu">
              Bernaveu<br>
              <input type="checkbox" name="canchas[]" value="Monumental">
              Monumental<br>
              <input type="checkbox" name="canchas[]" value="Bellavista">
                Cancha principal<br>
            </label>
          <br>
            <p>
              <input class="buttonStyle" type="submit" value="Enviar">
              <input class="buttonStyle" type="reset" value="Borrar">
            </p>
          </form>
    </div>
    <?php 

      $archivo = $_FILES['archivo'];
  echo "<pre>";
    

    $patch = $_SERVER['DOCUMENT_ROOT'].'/teamImg/'.$archivo['name'];

    move_uploaded_file($archivo['tmp_name'],$patch);
      $nombre = $_REQUEST['nombre'];
      $representante = $_REQUEST['representante'];
      $jugadores = $_REQUEST['jugadores'];
      $division = $_REQUEST['division'];
      $deporte = $_REQUEST['deporte'];
      $torneo = $_REQUEST['torneo'];
      $canchas = $_REQUEST['canchas'];
      $cedula = $_REQUEST['cedula'];
      $sede = $_REQUEST['sede'];

      echo "<p>Logo del equipo: </p>";
      if($archivo['name']!="")
         {
      $pathx = "../teamImg/";
      $file = $archivo['name'];
      echo '<img src="'.$pathx.$file.'", style="height: 150px;
    width: 150px;
    ">';
         }
      echo "<p>El nombre del equipo es: $nombre</p>"; 
      echo "<p>El nombre del representante es: $representante</p>"; 
      echo "<p>La cedula del representante es: $cedula</p>"; 
      echo "<p>El numero de jugadores del equipo es: $jugadores</p>"; 
      echo "<p>Su divison es: $division</p>"; 
      echo "<p>Disciplina: $deporte</p>";
      echo "<p>Torneos jugados: $torneo</p>";
      echo "<p>Su sede es: $sede</p>"; 
      echo "<p>Estadios en los que ha jugado: </p>"; 
      if($canchas)
      {
        foreach($canchas as $cancha)
          {
            echo "<ul>
                    <li>
                        $cancha
                    </li>
                </ul>";
          };
      }else{
        echo "Ninguna opcion fue seleccionada";
      }
      
      
    ?> 
  </body>
</html>