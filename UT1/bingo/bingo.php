<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BingoAlex</title>
</head>
<body>
	<?php
    require_once ("includes/funciones.php");
    $bombo=llenarBombo();
    $num_cartones=3;
    $totalJugadores=4; 
    $total_jugadores=numeroJugadores($totalJugadores,$num_cartones); 
    $ganadores= jugar($bombo, $total_jugadores, $num_cartones);
    mostrarCartones($total_jugadores,$num_cartones);
    mostrarGanadores($ganadores);

   ?>
</body>
</html>
