<?php
$name=$_GET['name']
echo "Привет $name <br>";
echo 'Привет $name'; #Некорректно т.к. значение name не подставляется
echo 'Привет'.$name;
?>

