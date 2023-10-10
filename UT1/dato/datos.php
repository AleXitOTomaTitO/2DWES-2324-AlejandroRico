
<?php
$res="";
	$nberr="";
	$nom="";
	$mailerr="";
	$email="";
	$sexerr="";
	$sex="";
	$ape1="";
	$ape2="";
	
		if(empty($_POST["nb"])){
			$nberr = "Nombre Requerido";
			$res="";
		}
		else{
			$nom=limpia($_POST["nb"]);
		}
		
		if(empty($_POST["mail"])){
			$mailerr = "Email Requerido";
			$res="";
		}
		else{
			$mail=limpia($_POST["mail"]);
		}
		
		if(empty($_POST["ope"])){
			$sexerr = "Sexo Requerido";
			$res="";
		}
		else{
			$sex=limpia($_POST["ope"]);
		}
		
		if(!empty($_POST["ap1"])){
			$ape1 = limpia($_POST["ap1"]);
		}
		
		if(!empty($_POST["ap2"])){
			$ape2 = limpia($_POST["ap2"]);
		}
		$res=ver($nom,$ape1,$ape2,$mail,$sex);
		
	
	function ver($nb,$ap1,$ap2,$ma,$se){
		$ver="";
		if(empty($ap1) && empty($ap2)){
			$ver="<table>
			<tr>
				<th>Nombre</th>
				<th>Mail</th>
				<th>Sexo</th>
			</tr>
			<tr>
				<td>$nb</td>
				<td>$ma</td>
				<td>$se</td>
			</tr>
		</table>";
		}else{
			$ver="
			<table>
			<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Mail</th>
				<th>Sexo</th>
			</tr>
			<tr>
				<td>$nb</td>
				<td>$ap1 $ap2</td>
				<td>$ma</td>
				<td>$se</td>
			</tr>
		</table>";
		}
		
		return $ver;
	}
	echo "<br><h3>RESULTADO</h3>";
		echo $res;
	function limpia($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}



?>
