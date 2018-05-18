<html>
<body>

<?php
// process form


$link = mysql_connect("sql207.vzpla.net", "user_16706864", "aplicada1");



mysql_select_db("user_16706864_Aplicada",$link);

$insertar = "INSERT INTO Profesores (Nombre, Codigo, Contrasena, Email, Materia)

VALUES ('".$_POST['nombre']."', '".$_POST['codigo']."',  '".$_POST['pass']."',  '".$_POST['mail']."', '".$_POST['MateriaProfesor']."' )";
      
mysql_query($insertar,$link);

echo "¡Gracias! Hemos recibido sus datos.\n";

header('Location: /registroProfesores.html');

?>


</body>
</html>

