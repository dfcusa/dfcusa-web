<?php
	$html = file_get_contents("php://input");
	echo '/var/www/html/dfcusa-web/' . $_GET['page'];
	file_put_contents('/var/www/html/dfcusa-web/' . $_GET['page'], $html);
?>