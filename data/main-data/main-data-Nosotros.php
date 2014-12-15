<?php 

$selection=$_POST["selection"];



if (isset($selection)) {

$texto = "


	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi numquam beatae quas totam doloribus facilis assumenda distinctio repellendus, maxime sapiente amet. Facere quas ut rerum iure, cupiditate. Beatae, quidem fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, nihil accusamus ad sunt inventore suscipit fuga aliquam quasi culpa praesentium, eius eligendi temporibus saepe asperiores omnis molestias deleniti officiis! Provident?</p>
	<article class='description-dev tooltip tooltip-effect-1'>
		<div class='circle tooltip-content'></div>
		<h3>Brian Reynhold</h3>
		<p>Lorem ipsum dolor sit amet, , totam enim nostrum magni qui voluptate quidem culpa error pariatur, autem dolor.</p>
	</article>
	<article class='description-dev tooltip tooltip-effect-1'>
		<div class='circle tooltip-content'></div>
		<h3>Horacio Gutierrez</h3>
		<p>Lorem ipsum dolor sit amet, , totam enim nostrum magni qui voluptate quidem culpa error pariatur, autem dolor.</p>
	</article>
<!--<object width='550' height='355'
data='http://www.youtube.com/embed/ow7nbanxSkI'>

</object>-->



";
	

	
	echo json_encode($texto);
	
}



 ?>