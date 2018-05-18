<html>
<body>

<?php


$link = mysql_connect("sql207.vzpla.net", "user_16706864", "aplicada1");


mysql_select_db("user_16706864_Aplicada",$link);



$codigo = $_POST['codigo'];

$cod= $_COOKIE["codigoprofesor"];

$query = " SELECT * FROM `Profesores` WHERE Codigo='$cod' ";

$resultado=mysql_query($query,$link);

mysqli_data_seek ($resultado, 0);
$extraido= mysqli_fetch_array($resultado);
$materia= mysql_result($resultado, 0, "Materia");

$query2 = " UPDATE $materia SET Nota1='".$_POST['Nota1']."' WHERE Codigo=$codigo";
$query3 = " UPDATE $materia SET Nota2='".$_POST['Nota2']."' WHERE Codigo=$codigo";
$query4 = " UPDATE $materia SET Nota3='".$_POST['Nota3']."' WHERE Codigo=$codigo";
     
$resultado2= mysql_query($query2,$link);
$resultado3= mysql_query($query3,$link);
$resultado4= mysql_query($query4,$link);
echo $materia;
header('Location: /Formsubirnotas.html');
?>



</body>
</html>