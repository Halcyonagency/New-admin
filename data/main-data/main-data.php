<?php 

$selection=$_GET["selection"];

$textos = array('nosotros' => "Este es un test!");

function getText($selection){

	switch (strtolower($selection)) {
		case 'nosotros':
			echo $textos[0].[$selection]
			break;
		
	}

}

 ?>