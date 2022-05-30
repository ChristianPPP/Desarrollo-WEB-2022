<html>
  <head>
    <title>FORMULARIO MARÍA JOSÉ CHALÁ LAB_03</title>

    <style>
      
      body {
        background-image:  url(https://i.pinimg.com/736x/95/26/5d/95265df873da4ef4e0910f6262ffc609.jpg);
        background-repeat: no-repeat;
        background-size:cover;
      }

      h1{
      text-align:center;
      }

      input, textarea {
       Background-color: rgba(0, 170, 228, 0.2);;
        border-color: #ffe5f0;
        border: 0.0px;
      }

      button{
        margin-left: 50%;
        transform: translateX(-50%);
        background-color: #c7f7f7;
        border-color: #c7f7f7;
      }
      
    </style>
  </head>
  <body>

    <h1>REGISTRO DE EVENTOS <br>  IMPORTANTES</h1>
    <form action="index.php" method="POST" enctype="multipart/form-data">
      
      <fieldset>
        <legend><FONT SIZE=5>Información Personal</FONT></legend> 
        <br>
        Nombre: <input name='nombre' type='text' > 
        <br> 
        <br>
     </fieldset>

        <br> 
        <br>
        <br> 
        <br>
      
      <fieldset>        
        <legend><FONT SIZE=5>Información del evento</FONT></legend>
        <br>
          <label> Fecha de realización de evento: 
            <input type="date" name="fecha">
          </label>
        <br> 
        <br>
        <label> Hora del evento: 
        <input type="time" name="hora">
        <br> 
        <br>
        <label for="tipo_eventos" >Tipo de evento:  </label>
          <input list="tipos" id="tipo_eventos" name="tipos" placeholder=" Escoge o ingresa el tipo de evento" style="width : 240px; heigth : 20px"/>
          <datalist id="tipos">
            <option value="Cumpleaños">
            <option value="Baby shower">
            <option value="Bautizo">
            <option value="Matrimonio">
          </datalist>
        </label>
        <br> 
        <br>
        <p>Info adicional: </p>
      <textarea name="info" cols="50" rows="7"></textarea>
        <br> 
        <br>
     </fieldset>

    <br>
    <br>
      <button type="submit">Registrar evento</button>
      <br>
      <br>    
      <button type="reset">Restablecer</button>

    </form>
      
     <?php 
    
    $nombre = $_REQUEST['nombre'];

    $fecha = $_REQUEST['fecha'];

    $hora = $_REQUEST['hora'];

    $tipo_evento = $_REQUEST['tipos'];

    $info = $_REQUEST['info'];

    //cambio de formato de fecha
    //$DateTime = DateTime::createFromFormat('Y-m-d', $fecha);
    //$newDate = $DateTime->format('d-m-Y');


    echo "<br><br><div align=\"center\">DATOS PERSONALES";
    echo "<br><br>El nombre de la persona que registro el evento es: $nombre <br>";
  echo "<br>DATOS DEL EVENTO";
    echo "<br><br>Fecha del evento: $fecha <br>";
    echo "Hora del evento: $hora <br>";
    echo "Tipo de evento: $tipo_evento <br>";
    echo "Información adicional del evento: $info <br>";
    
   
    
    ?> 
    
  </body>
</html>