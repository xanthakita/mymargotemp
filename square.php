<?php

	$output = print_r($_POST['entity_id'], TRUE);
	echo $output.PHP_EOL;
	$fp = fopen('./test.log', "a+");
	fwrite($fp);
	fclose($fp);


?>