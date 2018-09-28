<?php
	$html = file_get_contents("php://input");
	$page = $_GET['page'];
	if ($page == '') $page = 'index.html';
	echo '/var/www/html/dfcusa-web/' . $page;;
	file_put_contents('/var/www/html/dfcusa-web/' . $_GET['page'], $html);
?>