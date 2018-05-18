<head>
<?php

$link = mysql_connect("sql207.vzpla.net", "user_16706864", "aplicada1");

mysql_select_db("user_16706864_Aplicada",$link);

$codigo= $_COOKIE["codigoestudiante"];


$query = " SELECT * FROM `Estudiantes` WHERE Codigo='$codigo' ";

$result=mysql_query($query,$link);
mysqli_data_seek ($result, 0);
$extraido= mysqli_fetch_array($result);

$Materia1= mysql_result($result, 0, "Materia1");
$Materia2= mysql_result($result, 0, "Materia2");
$Materia3= mysql_result($result, 0, "Materia3");
$Materia4= mysql_result($result, 0, "Materia4");




$query2 = " SELECT * FROM `$Materia1` WHERE Codigo='$codigo' ";
$result2=mysql_query($query2,$link);
mysqli_data_seek ($result2, 0);
$extraido2= mysqli_fetch_array($result2);

$Nota1_1 = mysql_result($result2, 0, "Nota1");
$Nota2_1 = mysql_result($result2, 0, "Nota2");
$Nota3_1 = mysql_result($result2, 0, "Nota3");

$query2 = " SELECT * FROM `$Materia2` WHERE Codigo='$codigo' ";
$result2=mysql_query($query2,$link);
mysqli_data_seek ($result2, 0);
$extraido2= mysqli_fetch_array($result2);

$Nota1_2 = mysql_result($result2, 0, "Nota1");
$Nota2_2 = mysql_result($result2, 0, "Nota2");
$Nota3_2 = mysql_result($result2, 0, "Nota3");

$query2 = " SELECT * FROM `$Materia3` WHERE Codigo='$codigo' ";
$result2=mysql_query($query2,$link);
mysqli_data_seek ($result2, 0);
$extraido2= mysqli_fetch_array($result2);

$Nota1_3 = mysql_result($result2, 0, "Nota1");
$Nota2_3 = mysql_result($result2, 0, "Nota2");
$Nota3_3 = mysql_result($result2, 0, "Nota3");

$query2 = " SELECT * FROM `$Materia4` WHERE Codigo='$codigo' ";
$result2=mysql_query($query2,$link);
mysqli_data_seek ($result2, 0);
$extraido2= mysqli_fetch_array($result2);

$Nota1_4 = mysql_result($result2, 0, "Nota1");
$Nota2_4 = mysql_result($result2, 0, "Nota2");
$Nota3_4= mysql_result($result2, 0, "Nota3");




?>

    <meta charset="UTF-8">
	<title>formulario estudiante</title>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="hojastyle/fontello.css">
    <link rel="stylesheet" href="hojastyle/Estiloestudiantes.css">
    <link rel="stylesheet" href="hojastyle/menuestudiantes.css">
    <link rel="stylesheet" href="hojastyle/StyleNotasEst.css">
</head>
<body>
<header>
        <div class="contenedor">
            <h1 class="icon-child">Estudiantes</h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="panelEstudiantes.html">Inicio</a>
                <a href="notasEstudiantes.php">Notas</a>
              
                <a href="FormcontactoEst.html">Contacto</a>
                <a href="index.html"> <img src="imagenes/cancel.png"></a>
                
            
            </nav>
        </div>
        </header>
        <br><br><br><br>
<h3>  Notas Estudiante </h3>
 <br><br>

<div id="tablacentro">

<table class="tabla"  style="margin: 0 auto;">
    <tr>
            <th>Materia</th> 
            <th>Nota 1</th>
            <th>Nota 2</th> 
            <th>Nota Final</th>
            <th>Definitiva</th>  
      
           
    </tr>
    <tr>


            <td><?php echo $Materia1 ?> </td>
            <td><?php echo $Nota1_1 ?></td>
            <td><?php echo $Nota2_1?></td>
            <td><?php echo $Nota3_1?></td>
            <td><?php  echo (($Nota1_1 + $Nota2_1 + Nota3_1)/3)?></td>

    </tr>
    <tr>
            <td><?php echo $Materia2 ?> </td>
            <td><?php echo $Nota1_2 ?></td>
            <td><?php echo $Nota2_2?></td>
            <td><?php echo $Nota3_2?></td>
            <td><?php  echo (($Nota1_2 + $Nota2_2 + Nota3_2)/3)?></td>
    </tr>
    <tr>
              <td><?php echo $Materia3 ?> </td>
            <td><?php echo $Nota1_3 ?></td>
            <td><?php echo $Nota2_3?></td>
            <td><?php echo $Nota3_3?></td>
            <td><?php  echo (($Nota1_3 + $Nota2_3 + Nota3_3)/3)?></td>
    </tr>
    <tr>
             <td><?php echo $Materia4 ?> </td>
            <td><?php echo $Nota1_4 ?></td>
            <td><?php echo $Nota2_4?></td>
            <td><?php echo $Nota3_4?></td>
            <td><?php  echo (($Nota1_4 + $Nota2_4 + Nota3_4)/3)?></td>
    </tr>

    
    
</table>
</div>


</body>
