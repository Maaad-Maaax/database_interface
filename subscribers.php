<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM subscribers",$db);
	$myrow = mysql_fetch_array($connect);
/*Вывод из массива данных*/
	echo "<h1>Действующие абоненты</h1><table><tr><th>ID Лицевого счета</th><th>ФИО абонента</th><th>Контактный телефон</th><th>Дата подключения</th><th>Адрес установки</th><th>Технология подключения</th><th>Услуги</th><th>Линия</th><th>Оборудование</th></tr>\n";
		$i=1;
		do 
			{	
				echo "<tr><td>".$myrow['ID Лицевого счета']."</td><td>".$myrow['ФИО абонента']."</td><td>".$myrow['Контактный телефон']."</td><td>".$myrow['Дата подключения']."</td><td>".$myrow['Адрес установки']."</td><td>".$myrow['Технология подключения']."</td><td>".$myrow['Услуги']."</td><td>".$myrow['Линия']."</td><td>".$myrow['Оборудование']."</td></tr>";

					echo "<tr>";
					echo "<td class=\"ab_td\"><input name=\"submit\" class=\"bottom\" type=\"submit\" value=\"Изменить <<<\" form=\"new_tp$i\"><input name=\"submit\" class=\"bottom\" type=\"submit\" value=\"Удалить <<<\" form=\"new_tpd$i\"></input><input type=\"hidden\" name=\"ID\" form=\"new_tpd$i\" value=\"".$myrow['ID Лицевого счета']."\"></input></td>";
					echo <<<HERE
					<td class="ab_td"><input style="width: 100px;" name="FIO" form="new_tp$i" type="text"></input></td>
					<td class="ab_td"><input style="width: 100px;" name="KT" form="new_tp$i" type="text"></input></td>
					<td class="ab_td"><input style="width: 100px;" name="DP" form="new_tp$i" type="text"></input></td>
					<td class="ab_td"><input style="width: 100px;" name="AU" form="new_tp$i" type="text"></input></td>
					<td class="ab_td">
					<select name="TP" form="new_tp$i">
						<option>FTTx</option>
						<option>PON</option>
						<option>ADSL</option>
					</select></td>
HERE;
				echo "<td class=\"ab_td\"><input name=\"ID\" class=\"bottom_s\" type=\"submit\" value=\"".$myrow['ID Лицевого счета']."\" form=\"new_tpu\"></td>";
				echo "<td class=\"ab_td\"><input name=\"ID\" class=\"bottom_s\" type=\"submit\" value=\"".$myrow['ID Лицевого счета']."\" form=\"new_tpl\"></td>";
				echo "<td class=\"ab_td\"><input name=\"ID\" class=\"bottom_s\" type=\"submit\" value=\"".$myrow['ID Лицевого счета']."\" form=\"new_tpo\"></td>";
echo <<<HERE
			<form action="/service.php" method="post" name="insert" id="new_tpu">
			</form>
			<form action="/line.php" method="post" name="insert" id="new_tpl">
			</form>
			<form action="/one_equipment.php" method="post" name="insert" id="new_tpo">
			</form>
HERE;
echo <<<HERE
				</tr>
					<form action="/new_subscribers.php_update.php" method="post" name="insert" id="new_tp$i">
					</form>
					<form action="/delete_subscribers.php_update.php" method="post" name="insert" id="new_tpd$i">
					</form>
HERE;
			echo "<input type=\"hidden\" name=\"ID\" value=".$myrow['ID Лицевого счета']." form=\"new_tp$i\">";
			$i++;
			}
		while ($myrow = mysql_fetch_array($connect));
		
		echo "</table>";
	
?>
<br>
<div class="center">
<form>
	<a href="/"><input class="bottom" type="button" value=" Вернуться назад "></a>
</form>
</div>