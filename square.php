<?php

	$output = print_r($_POST, TRUE);

	$fp = fopen('./test.log', "a+");
	fwrite($fp);
	fclose($fp);


?>