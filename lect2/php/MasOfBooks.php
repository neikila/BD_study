<?php
	$items = array(
		array('id'=>'1', 'desc'=>'Учебник по PHP', 'price'=>'28.8'),
		array('id'=>'1', 'desc'=>'История Индии', 'price'=>'13.6'
		);
	$nom=$_GET['nom']
	$book = $items[$nom];
	echo "Ваша книга называется $book['desc']<br>";
	echo "Цена $book['price']<br>";
?>
