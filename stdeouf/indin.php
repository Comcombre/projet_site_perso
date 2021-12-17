<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="../data/site.css"/>
	
</head>
	<?php include("../php/variables.php")?>
	<?php echo '<body id="fond'.$rat.'">'?>
		
			<?php include("../php/nav.php") ?>
			<?php include("../php/footer.php") ?>
			
				<?php 	
				$data=yaml_parse_file("../data/menu.yaml");
				foreach($data AS $cle=>$val){
					echo '<section id="'.$cle.'">';
					include(''.$cle.'.php');
					echo '</section>';
					}
					?>

			
		
		</section>
		
	</body>
</html>
