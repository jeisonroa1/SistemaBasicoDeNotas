<html>
<body>

<?php
// process form


$link = mysql_connect("sql207.vzpla.net", "user_16706864", "aplicada1");


mysql_select_db("user_16706864_Aplicada",$link);

$insertar = "INSERT INTO Estudiantes (Nombre, Codigo, Contrasena, Email, Materia1, Materia2, Materia3, materia4)
VALUES ('".$_POST['nombre']."', '".$_POST['codigo']."',  '".$_POST['pass']."',  '".$_POST['mail']."', '".$_POST['Materia1']."' , '".$_POST['Materia2']."' , '".$_POST['Materia3']."' , '".$_POST['Materia4']."'  )";
      

$Materia1 = $_POST['Materia1'];
$Materia2 = $_POST['Materia2'];
$Materia3 = $_POST['Materia3'];
$Materia4 = $_POST['Materia4'];

$insertar1 = "INSERT INTO $Materia1 (Codigo) VALUES ( '".$_POST['codigo']."' )";
$insertar2 = "INSERT INTO $Materia2 (Codigo) VALUES ( '".$_POST['codigo']."' )";
$insertar3 = "INSERT INTO $Materia3 (Codigo) VALUES ( '".$_POST['codigo']."' )";
$insertar4 = "INSERT INTO $Materia4 (Codigo) VALUES ( '".$_POST['codigo']."' )";
      
mysql_query($insertar,$link);
      mysql_query($insertar1,$link);
mysql_query($insertar2,$link);
mysql_query($insertar3,$link);
mysql_query($insertar4,$link);
      
      

echo "¡Gracias! Hemos recibido sus datos.\n";

header('Location: /index.html');



?>


</body>
</html>

