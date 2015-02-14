<?php
$pdo = new PDO('mysql:<host name>;dbname = <dbname>, <login>, <password>');
try {<делаем что-то, что может привести к ошибке>}
catch  ( <тип исключения> <имя исключения> )
	{ <сообщение об ошибке> }
