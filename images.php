<?php
	if ($_GET['hub_verify_token'] == '3lll')
	{
		echo $_GET['hub_challenge'];
	}
?>