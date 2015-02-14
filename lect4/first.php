<?php
if (!isset($_GET['send']))
{
	include 'form.html.php';
	exit();
}
$gruppa = $_GET['gruppa'];
try
{
	$pdo = new PDO('mysql:host=localhost;
			dbname = Decanate', 'root', '');
}
//dbconnect.php
catch (PDOexception $e)
{
	$out = "Невозможно установить соединениеж";
	include 'output.html.php';
	exit();
}
try { $sql="Select s_id, name, birthday, FROM Student where index='$group'.";
	$result = $pdo->query($sql);}
catch (PFOexception $e)
{
	out="Неверный запрос";
	include 'output.html.php';
	exit();
}
while($row = $result->fetch())
{
	$students[]=array('id'=>$row['s_id'],
			'name'=$row['name'],
			'birthday'=$row['birthday']);
}
include 'arr_out.html.php';
?>
