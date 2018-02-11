<?php
if (isset($_GET['hub_verify_token'])){
	if ($_GET['hub_verify_token'] == '3lll')
	{
		echo $_GET['hub_challenge'];
	} else {
		$fp=fopen('fbtest.log',"w+");
		$output=print_r($_REQUEST,TRUE);
		$output.=print_r($_POST,TRUE);
		$output.=PHP_EOL;
		fwrite($fp,$output);
		fclose($fp);
	}
}
?>