<?php
$content=file_get_contents("../data/image.yaml");
$data=yaml_parse($content);

echo"<footer>";
	echo'<section id="images">';
		echo'<img src="'.$data['image']['facebook'].'">';
		echo'<img src="'.$data['image']['linkdins'].'">';
	echo"</section>";
echo"</footer>";
?>

