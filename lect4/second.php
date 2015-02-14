<html>
<head>
	<title>
		Таблица пользователей
	</title>
</head>
<body bgcolor>
	<div align=center>
		Ведомость<br><br>
	</div>
	<div align=left>
	<?php
		echo "Group $gruppa<br><br>\r\n";
	?>
	</div>
	<table border=1 width=100%>
		<tbody>
			<tr>
				<td align=center> Фаммилия </td>
				<td align=center> Дата рождения </td>
				<td align=center> Оценка </td>
				<?php foreach($students as $student:?>
				<tr>
					<td align center>
						<?php echo $student['name'];?>
					</td>
					<td align center>
						<?php echo $student['birthday'];?>
					</td>
					<td align center>
						<?php echo "<td>&nbsp</td>";?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tr>
		</tbody>
	</table>
</body>
</html>

