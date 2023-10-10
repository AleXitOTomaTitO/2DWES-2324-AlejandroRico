<?php
	$decerr="";
	$num=1;
	$bas=1;
	$baserr="";
	
		if(empty($_POST["dec"])){
			$decerr = "Numero Requerido";
			$res="";
		}else{
			$num=limpia($_POST["dec"]);
		}
		
		if(empty($_POST["base"])){
			$baserr = "Base Requerido";
			$res="";
		}else{
			$bas=limpia($_POST["base"]);
		}
		
	
		
		

		function limpia($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		function resultado ($n,$base){
			$res="";
			do{ 
				$div=($n%$base); 
				$n=(int)($n/$base);
				$res="$div$res"; 
			}while($n>$div);

			if($n!=0)$res="$n$res";
			return $res;
		}

		$bar=strpos($num,"/",0);
		$dec=substr($num,0,$bar);
		$basnum=substr($num,($bar+1));


		$final=resultado($dec,$bas);

		$res="$dec en base $basnum = $final en base $bas";
		
		
			echo "<br><h3>RESULTADO</h3>";
			echo $res;
								
	?>
