<?php 

$selection=$_POST['selection'];



if (isset($selection)) {

$texto = "

<div class='fullscreenForm'>
	<form>
	<ol>
	<li>
	<span>
		<label>What's your name?</label>
		<input type='text' placeholder='Horacio Gutierrez' required>
</span>
	</li>
	<li>
	<span>
		<label>What's your e-mail?</label>
		<input type='email' placeholder='horacio@Gutierrez.com' required>
</span>
	</li>
	<li>
	<span>
		<label>What's your priority for your new website?</label>
		<div class='piority'>
			<span class='priority circle'>Sell things</span>
			<span class='priority circle'>Institutional</span>
			<span class='priority circle'>Mobile</span>

		</div>
	</span>
	</li>


	<li>
	<span>
		<label>Describe how do you imagine your new website</label>
		<textarea placeholder='Describe here...'></textarea>
		</span>
	</li>
	<li>
	<span>
		<label>What's your budget?</label>
		<input type='number' placeholder='4000' step='100' min='100'>
		</span>
	</li>
	
	</ol>
	</form>
</div>
"
				;
	

	
	echo json_encode($texto);
	
}



 ?>