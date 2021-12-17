<?php
$content=file_get_contents("../data/a_propos.yaml");
$data=yaml_parse($content);
?>
			<section id='apropos'>
			<?php 
			echo"<p>".$data['presentation']."</p>"
			
			?>

			</section>