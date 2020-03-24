//Amine EJJORFI

<?php
	$f = fopen('text.txt', 'r+');
	$read = fread($f,filesize('text.txt'));
	$arr = explode("\n", $read);

	for ($i=0; $i <count($arr) ; $i++){
		$tab = explode('|', $arr[$i]);
			echo '<pre>';
        	print_r($tab);
        	echo '</pre>';
			echo "<br><br>";
	}
?>
