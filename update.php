<?php
	$html = file_get_contents("php://input");
	file_put_contents('/var/www/html/dfcusa-web/' . $_GET['page'], $html);
?>