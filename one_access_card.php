	<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	$ID = $_POST['ID'];
	/*Подлючение к БД*/
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
	/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM access_card WHERE `ID карты доступа` = $ID",$db);
	$myrow = mysql_fetch_array($connect);
	/*Вывод из массива данных*/
	echo "<h1>Тарифные планы</h1><table><tr><th>ID карты доступа</th><th>Логин</th><th>Пароль</th><th>Статус</th></tr>\n";
	do 
	{		
		echo "<tr><td>".$myrow['ID карты доступа']."</td></th><td>".$myrow['Логин']."</td><td>".$myrow['Пароль']."</td><td>".$myrow['Статус']."</td></tr>";
	}
		while ($myrow = mysql_fetch_array($connect));
		echo "</table>";
?>
<br>
<div class="center">
	<form action="/new_tariff_plan.php" method="post" name="insert" id="new_tp">
		<a href="/service.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
		<input name="submit" class="bottom" type="submit" value="Добавить" form="new_tp">
	</form>
</div>