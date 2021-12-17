<?php
$content=file_get_contents("../data/accueil.yaml");
$data=yaml_parse($content);
?>
			<section id='accueilp'>
               <img id='photo' src="../image/photo.jpg"> 
			   <h1>Qui suis je ?</h1>
			<?php 
			foreach ($data as $cle=>$val){
				echo '<p>'.$val.'</p> <br>';
			}
			?>

			</section>
