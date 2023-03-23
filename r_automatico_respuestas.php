<?php
$host = "localhost";
$usuario = "root";
$password = "";
$basedatos = "encuesta";
$con=new mysqli($host,$usuario,$password,$basedatos);
$num=$_POST['numero'];

$sede=['Norte','Centro','Sur','Este','Oeste'];
$operaciones=['Suma','Resta','Multiplicación','Exponente'];
$nacionalidad=['Mexicano','Japones','Argentino','Brasileño','Americano'];
$carrera=['Informatica','Administracion','Electromecanica','Derecho','Industrial'];
$municipio=['Teapa','Tacotalpa','Pichucalco','Tapijulapa','Chapultenango'];



for ($i = 1; $i <= $num; $i++) {
    //echo $i.'<br />';
	
	$indice=rand(0,4);
	$sede2=$sede[$indice];
	
	$indice=rand(0,10);
	$calificacion=$indice;
	
	$indice=rand(0,3);
    $operacion2=$operaciones[$indice];

	$indice=rand(4,10);
    $calzado=$indice;

    $indice=rand(1,5);
	$evaluacion=$indice;

	$indice=rand(0,4);
	$nacionalidad2=$nacionalidad[$indice];

	$indice=rand(0,4);
	$municipio2=$municipio[$indice];


	$indice = rand(5000, 10000) / 100;
	$cintura=$indice;
	$cintura = number_format($indice, 2, '.', '2'); 

	$indice=rand(0,4);
	$carrera2=$carrera[$indice];

	$con->query("insert into respuestas (sede,calificacion,operacion,calzado,evaluacion,nacionalidad,municipio,cintura,carrera) 
	values ('$sede2','$calificacion','$operacion2','$calzado','$evaluacion','$nacionalidad2','$municipio2','$cintura','$carrera2')");
	}



echo"$num dale click en continuar para ir a principal";


?>
<form id="form1" name="form1" method="post" action="Registro_autos_respuesta.html">
  <input type="submit" value="Continuar" />
</form>