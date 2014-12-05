<?php 

$selection=$_POST["selection"];



if (isset($selection)) {

$textos = array('Nosotros' => "Breve reseña historica...","Portfolio"=>"Mirá los últimos trabajos:", "Blog"=>"Dejanos tu opinión y leé la nuestra", "Contacto"=>"Contactanos!" );
	

	
	echo json_encode($textos[$selection]);
	
}




 ?>