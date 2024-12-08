<link rel="stylesheet" type="text/css" href="/style.css">
<?php
/*Подлючение к БД*/
$db = mysql_connect ("localhost","database","123");
mysql_select_db ("i_provider", $db);
/*Определение таблицы*/
$connect = mysql_query("SELECT * FROM access_card",$db);
$myrow = mysql_fetch_array($connect);
/*Вывод из массива данных*/
echo "<h1>Карты доступа</h1><table><tr><th>№ карты доступа</th><th>Логин</th><th>Пароль</th><th>Статус</th></tr>\n";
	do 
{		
	if ($myrow['Статус'] != NULL) {
		$myrow['Статус'] = "Занят";
	}
	echo "<tr><td>".$myrow['ID карты доступа']."<form method=\"post\" action=\"/delete_access_card.php\" ><input style=\"float: right;\" type=\"submit\" value=\"Удалить\"></input><input type=\"hidden\" name=\"ID\" value=".$myrow['ID карты доступа']."></input></form></td></th><td>".$myrow['Логин']."</td><td>".$myrow['Пароль']."</td><td>".$myrow['Статус']."</td></tr>";
}
	while ($myrow = mysql_fetch_array($connect));
	echo "<tr><td></td><td><input name=\"login\" class=\"new_tarif\" type=\"text\" form=\"new_tp\"></td><td><input name=\"password\" class=\"new_tarif\" type=\"text\" form=\"new_tp\"></td><td></td></tr>";
	echo "</table>";
	echo <<<HERE
	<br>
	<div class="center">
		<form action="/new_access_card.php" method="post" name="insert" id="new_tp">
			<a href="/"><input class="bottom" type="button" value=" Вернуться назад "></a>
			<input name="submit" class="bottom" type="submit" value="Добавить" form="new_tp">
		</form>
	</div>
HERE;
?>