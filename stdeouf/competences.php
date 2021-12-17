<?php
$content=file_get_contents("../data/competences.yaml");
$data=yaml_parse($content);
?>
			<section id='competence'>
                <h1>Compétence</h1>
                <?php 
                    foreach ($data as $cle=>$val)
                    {
                        echo '<h2>'.$cle.'</h2> <br>';
                        echo '<p>'.$val.'</p>';
                    }
                ?>

			</section>
