<?php 

$selection=$_POST["selection"];



if (isset($selection)) {

$textos = array('Nosotros' => "Breve reseña historica...","Portfolio"=>"Últimos trabajos:", "Blog"=>"Dejanos tu opinión", "Contacto"=>"Contactanos!" );
	

	
	echo json_encode($textos);
	
}




 ?>