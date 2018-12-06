<?php
	$link = new mysqli("localhost", "user", "1234", "mysql");
	if ($link->connect_errno) {
   			 printf("Не вдалось пыдключитись: %s\n", $link->connect_error); exit();
	}
?>
