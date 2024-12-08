<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	$ID = $_POST["ID"];
	/*Подлючение к БД*/
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
	/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM line WHERE `ID линии` = $ID",$db);
	$myrow = mysql_fetch_array($connect);
	/*Вывод из массива данных*/
	echo "<h1>Линия</h1><table><tr><th>ID линии</th><th>Расположение РК подъезд</th><th>Расположение РК этаж</th><th>Расположение коммутатора подъезд</th><th>Расположение коммутатора этаж</th></tr>\n";
		echo "<tr><td>".$myrow['ID линии']."</td></th><td>".$myrow['Расположение РК подъезд']."</td><td>".$myrow['Расположение РК этаж']."</td><td>".$myrow['Расположение коммутатора подъезд']."</td><td>".$myrow['Расположение коммутатора этаж']."</td></tr>";
		echo "</table>";
?>
<br>
<div class="center">
	<form action="/new_tariff_plan.php" method="post" name="insert" id="new_tp">
		<a href="/subscribers.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
	</form>
</div>