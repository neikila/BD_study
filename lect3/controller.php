<?php
	if ( $_REQUEST['firstname'] )
	{ include 'form.html.php'; }
	else
	{
		$firstname = $_REQUEST['firstname'];
		$output = 'Добра пожаловать '.$firstname;
		include 'out.html.php';
	}
?>
