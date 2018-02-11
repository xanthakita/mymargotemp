<?php
if (isset($_GET['hub_verify_token'])){
	if ($_GET['hub_verify_token'] == '3lll')
	{
		echo $_GET['hub_challenge'];
	} else {
		$fp=fopen('fbtest.log',"a");
		$output=var_dump($_POST);
		fwrite($fp,$output);
		fclose($fp);
	}
}
?>