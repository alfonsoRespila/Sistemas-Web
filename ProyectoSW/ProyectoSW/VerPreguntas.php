<?php
session_start();
if(isset($_REQUEST["correo"])){
	if((!isset($_SESSION['email']))||(empty($_SESSION['email']))){
		header('Location: layout.php?');
	}
include 'servidor.php';
include ("seguridad.php");
$conn = new mysqli($server, $user, $pass, $basededatos);
if (!$conn)
{
	die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
}

$query= 'SELECT * FROM Preguntas';
$resultado=mysqli_query($conn,$query);

echo '<table border=1> <tr> <th> Nombre </th> <th> Pregunta </th> <th> RC </th> <th> RI1 </th> <th> RI2 </th> <th> RI3 </th> <th> Complejidad </th> <th> Tema </th> </tr>';

while ($row= mysqli_fetch_array($resultado)){
	echo '<tr><td>' .$row["Nombre"]. '</td> <td>' . $row["Enunciado"] .'</td> <td>' . $row["Respuesta_Correcta"] .'</td><td>' . $row["Respuesta_Incorrecta1"] .'</td><td>' . $row["Respuesta_Incorrecta2"] .'</td><td>' . $row["Respuesta_Incorrecta3"] .'</td><td>' . $row["Complejidad"] .'</td><td>' . $row["Tema"] .'</td></tr>';
}
echo '</table>';
$resultado->close();
mysqli_close($conn);
?>

