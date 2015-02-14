<?php
try { $pdo = new PDO('mysql: host=Localhost;dbname = Decanat', 'root', ''); }
catch  ( PDOException $e )
	{
		$output 'Невозможно подключиться к серверу БД'.$e->getMessage();
		include 'out.html.php'; 
		exit();
	}
?>
<?php
try
	{
		$sql = 'select name, birthday fromstudent where g_id=1';
		$result = $pdo->query($sql);
	}
catch ( PDOException $e )
	{
		$output = 'Ошибка при извлечение данных'.$e->getMessage();
		include 'output.html.php';
		exit();
	}
while ( $row=$result->fetch() )
{
	$name[]=$row['name'];//одномерный ассоциативный массив
	$birthday[]=$row['birthday'];
	++$i;
}
?>

<?php
foreach( $result as $row ):
	$name[]=$row['name'];
	$birthday[]=$row['birthday'];
endforeach;
?>

<?php
	include 'dbconnect.php';
	try
	{
		$sql = 'select name, birthday fromstudent where g_id=1';
		$result = $pdo->query($sql);
	}
	catch ( PDOExceptiioin $e )
	{
 		$output = 'Невозможно извлечение данных'.$e->getMessage();//$e->Message()
		include 'out.html.php';
		exit();
	}
	while ( $row=$result->fetch() )
	{
		$name[]=$row['name'];//одномерный ассоциативный массив
		$birthday[]=$row['birthday'];
		++$i;
	}
	include 'arr_output.php';
