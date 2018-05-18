<html>
<body>

<?php


$link = mysql_connect("sql207.vzpla.net", "user_16706864", "aplicada1");


mysql_select_db("user_16706864_Aplicada",$link);



$codigo = $_POST['codigo'];
$pass = $_POST['pass'];
$query = " SELECT * FROM `Profesores` WHERE Codigo='$codigo' and Contrasena='$pass'";

$resultado=mysql_query($query,$link);


$count = mysql_num_rows($resultado);

if ($count == 0){header('Location: http://notasud.vzpla.net/loginerrorProfesores.html');}
else {header('Location: http://notasud.vzpla.net/panelProfesores.html');
setcookie("codigoprofesor", $codigo, time()+600, "/", "notasud.vzpla.net");}



?>

<p ><a href="index.html"> Volver a menu</a></p>

</body>
</html>