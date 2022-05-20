<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;500&display=swap" rel="stylesheet">
    <title>Registro laboratorios ESFOT</title>
</head>

<body >
    <h1>BIENVENIDO</h1>
    <h2>Formulario de registro</h2>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <label> Código único
            <br>
            <input type="number" name="codigoUnico">
        </label>
        <br>
        <br>
        <label> Nombres
            <br>
            <input type="text" name="nombres">
        </label>
        <br>
        <br>
        <label> Apellidos
            <br>
            <input type="text" name="apellidos">
        </label>
        <br>
        <br>
        <label> Edad
            <br>
            <input type="number" name="edad">
        </label>
        <br>
        <br>
        <label> Carrera
            <br>
            <label> TSDS
                <input type="radio" name="carrera" value="TSDS">
            </label>
            <br>
            <label> TSASA
                <input type="radio" name="carrera" value="TSASA">
            </label>
            <br>
            <label> TSEM
                <input type="radio" name="carrera" value="TSEM">
            </label>
            <br>
            <label> TSRT
                <input type="radio" name="carrera" value="TSRT">
            </label>
            <br>
            <br>
        </label>
        <label> Fecha de ingreso
            <br>
            <input type="date" name="fechaIngreso">
        </label>
        <br>
        <br>
        <label > Tipo de uso
            <br>
            <label>Investigación
                <input type="checkbox" name="tipoUsos[]" value="Investigación">
            </label>
            <br>
            <label> Programación 
                <input type="checkbox" name="tipoUsos[]" value="Programación">
            </label>
            <br>
            <label> Descargas
                <input type="checkbox" name="tipoUsos[]" value="Descargas">
            </label>
            <br>
            <label> Videoconferencias
                <input type="checkbox" name="tipoUsos[]" value="Videoconferencias">
            </label>
            <br>
            <br>
        </label>
        <label> Detalle del motivo de uso
            <br>
            <textarea name="motivoUso" cols="50" rows="5"></textarea>
        </label>
        <br>
        <br>
        <label> Observaciones
            <br>
            <textarea name="observaciones" cols="50" rows="5"></textarea>
        </label>
        <br>
        <br>
        <label> Carnet Estudiantil
            <input type="file" name="carnetEstudiantil">
            <br>
            <br>
        </label>
        <button type="submit">Enviar</button>
    </form>
    <?php
    $codigoUnico = $_REQUEST['codigoUnico'];
    $nombres = $_REQUEST['nombres'];
    $apellidos = $_REQUEST['apellidos'];
    $edad = $_REQUEST['edad'];
    $carrera = $_REQUEST['carrera'];
    $fechaIngreso = $_REQUEST['fechaIngreso'];
    $motivoUso = $_REQUEST['motivoUso'];
    $observaciones = $_REQUEST['observaciones'];
    $carnetEstudiantil = $_FILES['carnetEstudiantil'];
    $tiposUso = $_REQUEST['tipoUsos'];
    $pathFile = $_SERVER['DOCUMENT_ROOT'].'/files/'.$carnetEstudiantil['name'];
    move_uploaded_file($carnetEstudiantil['tmp_name'], $pathFile);
    
    echo "<br> <label> 
        <h2>Datos Registrados</h2>
        <h3>Código Único: $codigoUnico</h3>
        <h3>Nombres: $nombres</h3>
        <h3>Apellidos: $apellidos</h3>
        <h3>Edad: $edad</h3>
        <h3>Carrera: $carrera</h3>
        <h3>Fecha de ingreso: $fechaIngreso</h3>
    </label>";
    echo "<h3>Tipo de uso:</h3>";
    if ($tiposUso) {
        foreach($tiposUso as $uso) {
            echo "<ul>
                        <li>
                        $uso
                        </li>
                    </ul>";
        }
    }
    echo "<label> 
        <h3>Motivo de uso: $motivoUso</h3>
        <h3>Observaciones: $observaciones</h3>
        <h3>Carnet estudiantil registrado: </h3>
    </label>";

    if($carnetEstudiantil['name']!=""){
        $rutax = "../files/";
        $archivo = $carnetEstudiantil['name'];
        echo ' <br> <img src="'.$rutax.$archivo.'">';
    }
    ?>
</body>
</html>