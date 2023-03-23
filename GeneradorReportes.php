<?php
include( 'GoogChart.class.php' );
include("conexion.php");

$opcion=$_POST['reportes'];

if ($opcion == 1){
$query1 ="SELECT COUNT('id_resp') FROM respuestas WHERE sede = 'Norte'";
$sql = mysqli_query($con, $query1);
$row = mysqli_fetch_array($sql);
$query2 ="SELECT COUNT('id_resp') FROM respuestas WHERE sede = 'Centro'";
$sql2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($sql2);
$query3 ="SELECT COUNT('id_resp') FROM respuestas WHERE sede = 'Sur'";
$sql3 = mysqli_query($con, $query3);
$row3 = mysqli_fetch_array($sql3);
$query4 ="SELECT COUNT('id_resp') FROM respuestas WHERE sede = 'Este'";
$sql4 = mysqli_query($con, $query4);
$row4 = mysqli_fetch_array($sql4);
$query5 ="SELECT COUNT('id_resp') FROM respuestas WHERE sede = 'Oeste'";
$sql5 = mysqli_query($con, $query5);
$row5 = mysqli_fetch_array($sql5);

/** Create chart */
$chart = new GoogChart();

$dataMultiple = array(

    'Sedes' => array(
		'Norte' => $row[0],
		'Centro' => $row2[0],
		'Sur' => $row3[0],
		'Este' => $row4[0],
		'Oeste' => $row5[0],
	),
);
$color = array(
    '#039BE5',
);

echo '<h3>Barra Vertical</h3>';
$chart->setChartAttrs(array(
    'type' => 'bar-vertical',
    'title' => 'Número de sedes',
	'data' => $dataMultiple,
	'size' => array( 900, 200 ),
	'color' => $color,
	'labelsXY' => false,
));

echo $chart;

}else if($opcion == 2){
	$query1 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '0'";
	$sql = mysqli_query($con, $query1);
	$row = mysqli_fetch_array($sql);
	$query2 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '1'";
	$sql2 = mysqli_query($con, $query2);
	$row2 = mysqli_fetch_array($sql2);
	$query3 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '2'";
	$sql3 = mysqli_query($con, $query3);
	$row3 = mysqli_fetch_array($sql3);
	$query4 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '3'";
	$sql4 = mysqli_query($con, $query4);
	$row4 = mysqli_fetch_array($sql4);
	$query5 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '4'";
	$sql5 = mysqli_query($con, $query5);
	$row5 = mysqli_fetch_array($sql5);
	$query6 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '5'";
	$sql6 = mysqli_query($con, $query6);
	$row6 = mysqli_fetch_array($sql6);
	$query7 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '6'";
	$sql7 = mysqli_query($con, $query7);
	$row7 = mysqli_fetch_array($sql7);
	$query8 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '7'";
	$sql8 = mysqli_query($con, $query8);
	$row8 = mysqli_fetch_array($sql8);
	$query9 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '8'";
	$sql9 = mysqli_query($con, $query9);
	$row9 = mysqli_fetch_array($sql9);
	$query10 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '9'";
	$sql10 = mysqli_query($con, $query10);
	$row10 = mysqli_fetch_array($sql10);
	$query11 ="SELECT COUNT('id_resp') FROM respuestas WHERE calificacion = '10'";
	$sql11 = mysqli_query($con, $query11);
	$row11 = mysqli_fetch_array($sql11);
	
	$chart = new GoogChart();
	
	$data = array(
	
		'Calificaciones' => array(
			'0' => $row[0],
			'1' => $row2[0],
			'2' => $row3[0],
			'3' => $row4[0],
			'4' => $row5[0],
			'5' => $row6[0],
			'6' => $row7[0],
			'7' => $row8[0],
			'8' => $row9[0],
			'9' => $row10[0],
			'10' => $row11[0],
		),
	);
	$color = array(
		'#3F51B5',
	);
	
	echo '<h3>Barra vertical</h3>';
	$chart->setChartAttrs(array(
		'type' => 'bar-vertical',
		'title' => 'Número de Calificaciones',
		'data' => $data,
		'size' => array(999,200),
		'color' => $color,
		'labelsXY' => true,
	));
	
	echo $chart;

}else if($opcion == 3){

$query1 ="SELECT COUNT('id_resp') FROM respuestas WHERE operacion = 'Suma'";
$sql = mysqli_query($con, $query1);
$row = mysqli_fetch_array($sql);
$query2 ="SELECT COUNT('id_resp') FROM respuestas WHERE operacion = 'Resta'";
$sql2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($sql2);
$query3 ="SELECT COUNT('id_resp') FROM respuestas WHERE operacion = 'Multiplicación'";
$sql3 = mysqli_query($con, $query3);
$row3 = mysqli_fetch_array($sql3);
$query4 ="SELECT COUNT('id_resp') FROM respuestas WHERE operacion = 'Exponente'";
$sql4 = mysqli_query($con, $query4);
$row4 = mysqli_fetch_array($sql4);

/** Create chart */
$chart = new GoogChart();

$dataMultiple = array(

    'Operaciones' => array(
		'Norte' => $row[0],
		'Centro' => $row2[0],
		'Sur' => $row3[0],
		'Este' => $row4[0],
	),
);
$color = array(
    '#FF00FF',
);

echo '<h3>Barra Vertical</h3>';
$chart->setChartAttrs(array(
    'type' => 'bar-vertical',
    'title' => 'Grafica de Operaciones',
	'data' => $dataMultiple,
	'size' => array( 800, 200 ),
	'color' => $color,
	'labelsXY' => true,
));

echo $chart;


}else if($opcion == 4){
	
$query1 ="SELECT COUNT('id_resp') FROM respuestas WHERE calzado = '4'";
$sql = mysqli_query($con, $query1);
$row = mysqli_fetch_array($sql);
$query2 ="SELECT COUNT('id_resp') FROM respuestas WHERE calzado = '5'";
$sql2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($sql2);
$query3 ="SELECT COUNT('id_resp') FROM respuestas WHERE calzado = '6'";
$sql3 = mysqli_query($con, $query3);
$row3 = mysqli_fetch_array($sql3);
$query4 ="SELECT COUNT('id_resp') FROM respuestas WHERE calzado = '7'";
$sql4 = mysqli_query($con, $query4);
$row4 = mysqli_fetch_array($sql4);
$query5 ="SELECT COUNT('id_resp') FROM respuestas WHERE calzado = '8'";
$sql5 = mysqli_query($con, $query5);
$row5 = mysqli_fetch_array($sql5);
$query6 ="SELECT COUNT('id_resp') FROM respuestas WHERE calzado = '9'";
$sql6 = mysqli_query($con, $query6);
$row6 = mysqli_fetch_array($sql6);
$query7 ="SELECT COUNT('id_resp') FROM respuestas WHERE calzado = '10'";
$sql7 = mysqli_query($con, $query7);
$row7 = mysqli_fetch_array($sql7);

/** Create chart */
$chart = new GoogChart();

$dataMultiple = array(

    'Calzados' => array(
		'4' => $row[0],
		'5' => $row2[0],
		'6' => $row3[0],
		'7' => $row4[0],
		'8' => $row5[0],
		'9' => $row6[0],
		'10' => $row7[0],
	),
);
$color = array(
    '#F39C12',
);

echo '<h3>Barra Vertical</h3>';
$chart->setChartAttrs(array(
    'type' => 'bar-vertical',
    'title' => 'Número de Calzados',
	'data' => $dataMultiple,
	'size' => array( 800, 200 ),
	'color' => $color,
	'labelsXY' => true,
));

echo $chart;
}else if($opcion == 5){

$query1 ="SELECT COUNT('id_resp') FROM respuestas WHERE evaluacion = '1'";
$sql = mysqli_query($con, $query1);
$row = mysqli_fetch_array($sql);
$query2 ="SELECT COUNT('id_resp') FROM respuestas WHERE evaluacion = '2'";
$sql2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($sql2);
$query3 ="SELECT COUNT('id_resp') FROM respuestas WHERE evaluacion = '3'";
$sql3 = mysqli_query($con, $query3);
$row3 = mysqli_fetch_array($sql3);
$query4 ="SELECT COUNT('id_resp') FROM respuestas WHERE evaluacion = '4'";
$sql4 = mysqli_query($con, $query4);
$row4 = mysqli_fetch_array($sql4);
$query5 ="SELECT COUNT('id_resp') FROM respuestas WHERE evaluacion = '5'";
$sql5 = mysqli_query($con, $query5);
$row5 = mysqli_fetch_array($sql5);

/** Create chart */
$chart = new GoogChart();

$dataMultiple = array(

    'Evaluaciones' => array(
		'1' => $row[0],
		'2' => $row2[0],
		'3' => $row3[0],
		'4' => $row4[0],
		'5' => $row5[0],
	),
);
$color = array(
    '#28B463',
);

echo '<h3>Barra Vertical</h3>';
$chart->setChartAttrs(array(
    'type' => 'bar-vertical',
    'title' => 'Número de Evaluaciones',
	'data' => $dataMultiple,
	'size' => array( 800, 200 ),
	'color' => $color,
	'labelsXY' => true,
));

echo $chart;

  
}else if($opcion == 6){
$queryF1 ="SELECT COUNT('id_resp') FROM respuestas WHERE nacionalidad = 'Mexicano'";
$sqlF1 = mysqli_query($con, $queryF1);
$rowF1 = mysqli_fetch_array($sqlF1);
$queryF2 ="SELECT COUNT('id_resp') FROM respuestas WHERE nacionalidad = 'Japones'";
$sqlF2 = mysqli_query($con, $queryF2);
$rowF2 = mysqli_fetch_array($sqlF2);
$queryF3 ="SELECT COUNT('id_resp') FROM respuestas WHERE nacionalidad = 'Argentino'";
$sqlF3 = mysqli_query($con, $queryF3);
$rowF3 = mysqli_fetch_array($sqlF3);
$queryF4 ="SELECT COUNT('id_resp') FROM respuestas WHERE nacionalidad = 'Brazileño'";
$sqlF4 = mysqli_query($con, $queryF4);
$rowF4 = mysqli_fetch_array($sqlF4);
$queryF5 ="SELECT COUNT('id_resp') FROM respuestas WHERE nacionalidad = 'Americano'";
$sqlF5 = mysqli_query($con, $queryF5);
$rowF5 = mysqli_fetch_array($sqlF5);

/** Create chart */
$chart = new GoogChart();

$data = array(

    'Nacionalidades' => array(
		'Mexicano' => $rowF1[0],
		'Japones' => $rowF2[0],
		'Argentino' => $rowF3[0],
		'Brazileño' => $rowF4[0],
		'Americano' => $rowF5[0],
		
	),
);
$color1 = array(
    '#34495E',
    
);

echo '<h3>Barra Vertical</h3>';
$chart->setChartAttrs(array(
    'type' => 'bar-vertical',
    'title' => 'las nacionalidades',
	'data' => $data,
	'size' => array( 600, 200 ),
	'color' => $color1,
	'labelsXY' => true,
));

echo $chart;
  
}else if($opcion == 7){

	$query1 ="SELECT COUNT('id_resp') FROM respuestas WHERE Municipio = 'Teapa'";
	$sql = mysqli_query($con, $query1);
	$row = mysqli_fetch_array($sql);
	$query2 ="SELECT COUNT('id_resp') FROM respuestas WHERE Municipio = 'Tacotalpa'";
	$sql2 = mysqli_query($con, $query2);
	$row2 = mysqli_fetch_array($sql2);
	$query3 ="SELECT COUNT('id_resp') FROM respuestas WHERE Municipio = 'Pichucalco'";
	$sql3 = mysqli_query($con, $query3);
	$row3 = mysqli_fetch_array($sql3);
	$query4 ="SELECT COUNT('id_resp') FROM respuestas WHERE Municipio = 'Tapijulapa'";
	$sql4 = mysqli_query($con, $query4);
	$row4 = mysqli_fetch_array($sql4);
	$query5 ="SELECT COUNT('id_resp') FROM respuestas WHERE Municipio = 'Chapultenango'";
	$sql5 = mysqli_query($con, $query5);
	$row5 = mysqli_fetch_array($sql5);

/** Create chart */
$chart = new GoogChart();

$dataMultiple = array(

    'Municipios' => array(
		'Teapa' => $row[0],
		'Tacotalpa' => $row2[0],
		'Pichucalco' => $row3[0],
		'Tapijulapa' => $row4[0],
		'Chapultenango' => $row5[0],
	),
);
$color = array(
    '#7B1FA2',
);

echo '<h3>Barra Vertical</h3>';
$chart->setChartAttrs(array(
    'type' => 'bar-vertical',
    'title' => 'Estado Civil',
	'data' => $dataMultiple,
	'size' => array( 800, 200 ),
	'color' => $color,
	'labelsXY' => true,
));

echo $chart;

}else if($opcion == 8){
	$query1 ="SELECT COUNT('id_resp') FROM respuestas WHERE cintura = '60.4'";
	$sql = mysqli_query($con, $query1);
	$row = mysqli_fetch_array($sql);
	$query2 ="SELECT COUNT('id_resp') FROM respuestas WHERE cintura = '80.5'";
	$sql2 = mysqli_query($con, $query2);
	$row2 = mysqli_fetch_array($sql2);
	$query3 ="SELECT COUNT('id_resp') FROM respuestas WHERE cintura = '90.2'";
	$sql3 = mysqli_query($con, $query3);
	$row3 = mysqli_fetch_array($sql3);
	$query4 ="SELECT COUNT('id_resp') FROM respuestas WHERE cintura = '75.2'";
	$sql4 = mysqli_query($con, $query4);
	$row4 = mysqli_fetch_array($sql4);
	$query5 ="SELECT COUNT('id_resp') FROM respuestas WHERE cintura = '66.4'";
	$sql5 = mysqli_query($con, $query5);
	$row5 = mysqli_fetch_array($sql5);
	
	$chart = new GoogChart();
	
	$data = array(
	
		'Datos Cintura' => array(
			'Amatan' => $row[0],
			'Teapa' => $row2[0],
			'Zunu' => $row3[0],
			'Oxolotan' => $row4[0],
			'Tapijulapa' => $row5[0],
		),
	);
	$color = array(
		'#0000FF',
	);
	
	echo '<h3>Barra vertical</h3>';
	$chart->setChartAttrs(array(
		'type' => 'bar-vertical',
		'title' => 'Grafica cinturas',
		'data' => $data,
		'size' => array(1000,200),
		'color' => $color,
		'labelsXY' => true,
	));
	
	echo $chart;

}else if($opcion == 9){
	$query1 ="SELECT COUNT('id_resp') FROM respuestas WHERE carrera = 'Informatica'";
	$sql = mysqli_query($con, $query1);
	$row = mysqli_fetch_array($sql);
	$query2 ="SELECT COUNT('id_resp') FROM respuestas WHERE carrera = 'Administracion'";
	$sql2 = mysqli_query($con, $query2);
	$row2 = mysqli_fetch_array($sql2);
	$query3 ="SELECT COUNT('id_resp') FROM respuestas WHERE carrera = 'Electromecanica'";
	$sql3 = mysqli_query($con, $query3);
	$row3 = mysqli_fetch_array($sql3);
	$query4 ="SELECT COUNT('id_resp') FROM respuestas WHERE carrera = 'Derecho'";
	$sql4 = mysqli_query($con, $query4);
	$row4 = mysqli_fetch_array($sql4);
	$query5 ="SELECT COUNT('id_resp') FROM respuestas WHERE carrera = 'Industrial'";
	$sql5 = mysqli_query($con, $query5);
	$row5 = mysqli_fetch_array($sql5);
	
	$chart = new GoogChart();
	
	$data = array(
	
		'Carreras' => array(
			'Informatica' => $row[0],
			'Administracion' => $row2[0],
			'Electromecanica' => $row3[0],
			'Derecho' => $row4[0],
			'Industrial' => $row5[0],
		),
	);
	$color = array(
		'#0000FF',
	);
	
	echo '<h3>Barra vertical</h3>';
	$chart->setChartAttrs(array(
		'type' => 'bar-vertical',
		'title' => 'Todas las carreras',
		'data' => $data,
		'size' => array(1000,200),
		'color' => $color,
		'labelsXY' => true,
	));
	
	echo $chart;
  
}else {
	echo "No has seleccionado ninguna opción";
}

?>
