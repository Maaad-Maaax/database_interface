<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	$ID = $_POST["ID"];
	/*Подлючение к БД*/
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
	/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM equipment WHERE `ID категории` = $ID",$db);
	$myrow = mysql_fetch_array($connect);
	/*Вывод из массива данных*/
	echo "<h1>Оборудование</h1><table><tr><th>ID категории</th><th>ID роутера</th><th>ID ТВ приставки</th></tr>\n";
		echo "<tr><td>".$myrow['ID категории']."</td></th><td>".$myrow['ID роутера']."</td><td>".$myrow['ID ТВ приставки']."</td></tr>";
		echo "</table>";
?>
<br>
<div class="center">
	<form action="/new_tariff_plan.php" method="post" name="insert" id="new_tp">
		<a href="/subscribers.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
	</form>
</div>