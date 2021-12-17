<?php
$content=file_get_contents("../data/experience.yaml");
$data=yaml_parse($content);
/*echo "<pre>";
print_r($data);
echo"<pre>";*/
echo"<nav>";
	foreach ($data as $cle=>$val){
		echo '<a href="#'.$val.'">'.$cle.'</a>';
	}

echo"</nav>"
?>