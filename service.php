<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	$ID = $_POST["ID"];
	/*Подлючение к БД*/
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
	/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM services WHERE `ID услуги` = $ID",$db);
	$myrow = mysql_fetch_array($connect);
	/*Вывод из массива данных*/
	echo "<h1>Услуги</h1><table><tr><th>ID Услуги</th><th>Интернет</th><th>Цифровое ТВ</th><th>Сотовая связь</th><th>Проводная связь</th><th>ID тарифного плана</th><th>ID карты доступа</th></tr>\n";	
		if ($myrow['Интернет'] == 1) {
			$myrow['Интернет'] = "ДА";
		}
		else {
			$myrow['Интернет'] = "НЕТ";
		}
		if ($myrow['Цифровое ТВ'] == 1) {
			$myrow['Цифровое ТВ'] = "ДА";
		}
		else {
			$myrow['Цифровое ТВ'] = "НЕТ";
		}
		if ($myrow['Сотовая связь'] == 1) {
			$myrow['Сотовая связь'] = "ДА";
		}
		else {
			$myrow['Сотовая связь'] = "НЕТ";
		}
		if ($myrow['Проводная связь'] == 1) {
			$myrow['Проводная связь'] = "ДА";
		}
		else {
			$myrow['Проводная связь'] = "НЕТ";
		}
		echo "<tr><td>".$myrow['ID услуги']."</td></th><td>".$myrow['Интернет']."</td><td>".$myrow['Цифровое ТВ']."</td><td>".$myrow['Сотовая связь']."</td><td>".$myrow['Проводная связь']."</td>";
		echo "<td class=\"ab_td\"><input name=\"ID\" class=\"bottom_s\" type=\"submit\" value=\"".$myrow['ID услуги']."\" form=\"new_tp\"></td>";
		echo "<td class=\"ab_td\"><input name=\"ID\" class=\"bottom_s\" type=\"submit\" value=\"".$myrow['ID услуги']."\" form=\"new_tpp1\"></td></tr>";
		echo <<<HERE
			<form action="/one_tariff_plan.php" method="post" name="ID" id="new_tp">
			</form>
			<form action="/one_access_card.php" method="post" name="ID" id="new_tpp1">
			</form>
			</table>
HERE;
?>
<br>
<div class="center">
	<form action="/new_tariff_plan.php" method="post" name="insert" id="new_tp">
		<a href="/subscribers.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
		<input name="submit" class="bottom" type="submit" value="Добавить" form="new_tp">
	</form>
</div>