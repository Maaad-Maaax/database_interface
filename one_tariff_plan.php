	<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	$ID = $_POST['ID'];
	/*Подлючение к БД*/
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
	/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM tariff_plan WHERE `ID Тарифного плана` = $ID",$db);
	$myrow = mysql_fetch_array($connect);
	/*Вывод из массива данных*/
	echo "<h1>Тарифные планы</h1><table><tr><th>ID Тарифного плана</th><th>Наименование</th><th>Скорость соединения</th><th>К-во ТВ каналов</th><th>К-во минут сотовой связи</th><th>Цена мин. сверх пакета</th><th>Пакета интернет трафика</th><th>Цена мин. проводной связи</th><th>Цена тарифа</th></tr>\n";
	do 
	{		
		echo "<tr><td>".$myrow['ID Тарифного плана']."</td></th><td>".$myrow['Наименование']."</td><td>".$myrow['Скорость соединения']."</td><td>".$myrow['К-во ТВ каналов']."</td><td>".$myrow['К-во минут сотовой связи']."</td><td>".$myrow['Цена мин. сверх пакета']."</td><td>".$myrow['Пакет интернет трафика']."</td><td>".$myrow['Цена мин. проводной связи']."</td><td>".$myrow['Цена тарифа']."</td></tr>";
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