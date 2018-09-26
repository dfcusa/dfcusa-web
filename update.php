<?php
	$html = file_get_contents("php://input");
	file_put_contents('/Users/vinay/Documents/htdocs/dfcusa2/' . $_GET['page'], $html);
?>