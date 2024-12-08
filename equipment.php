<link rel="stylesheet" type="text/css" href="/style.css">
<?php
/*-------------------------------------------------  Роутеры   --------------------------------------------*/
/*Подлючение к БД*/
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM routers",$db);
	$myrow = mysql_fetch_array($connect);
/*Вывод из массива данных*/
	echo "<h1>Роутеры</h1><table><tr><th>ID роутера</th><th>Модель роутера</th></tr>\n";
		$s = 1;
		do 
			{		
				echo "<tr><td>".$myrow['ID роутера']."<form method=\"post\" action=\"/delete_equipment.php\"><input type=\"submit\" value=\"Удалить\" style=\"float: right;\"></input><input type=\"hidden\" value=\"".$myrow['ID роутера']."\" name=\"ID\" ></input></form></td><td>".$myrow['Модель роутера'];
				
				echo "<input type=\"text\" form=\"update$s\" name=\"I\" style=\"float: right;\"></input><input style=\"float: right;\" type=\"submit\" value=\"Изменить\" form=\"update$s\"></input><input type=\"hidden\" value=\"".$myrow['ID роутера']."\" form=\"update$s\" name=\"ID\" ></input>";
				echo <<<HERE
				</td></tr>
				<form name="insert" action="/update_equipment.php" id="update$s" method="post"></form>
HERE;
			$s++;
			}
		while ($myrow = mysql_fetch_array($connect));
		
		echo "<tr><td></td><td><input name=\"router\" class=\"new_tarif\" type=\"text\" form=\"new_tp\"></td></tr>";
	
		echo "</table>";
	
		echo <<<HERE
	<br>
	<div class="center">
		<form action="/new_equipment.php" method="post" name="insert" id="new_tp">
			<input name="submit" class="bottom" type="submit" value="Добавить" form="new_tp">
		</form>
	</div>
HERE;

/*-------------------------------------------------  Приставки   --------------------------------------------*/
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM tv_box",$db);
	$myrow = mysql_fetch_array($connect);
/*Вывод из массива данных*/
	echo "<h1>ТВ приставки</h1><table><tr><th>ID ТВ приставки</th><th>Модель ТВ приставки</th></tr>\n";
		$ss = 1;
		do 
			{		
			echo "<tr><td>".$myrow['ID ТВ приставки']."<form method=\"post\" action=\"/delete_equipment_tv.php\"><input type=\"submit\" value=\"Удалить\" style=\"float: right;\"></input><input type=\"hidden\" value=\"".$myrow['ID ТВ приставки']."\" name=\"ID\" ></input></form></td><td>".$myrow['Модель ТВ приставки'];
			echo "<input type=\"text\" form=\"updatea$ss\" name=\"I\" style=\"float: right;\"></input><input style=\"float: right;\" type=\"submit\" value=\"Изменить\" form=\"updatea$ss\"></input><input type=\"hidden\" value=\"".$myrow['ID ТВ приставки']."\" form=\"updatea$ss\" name=\"ID\" ></input></td></tr>";
				echo <<<HERE
				</td></tr>
				<form name="insert" action="/update_equipment_tv.php" id="updatea$ss" method="post"></form>
HERE;
			$ss++;
			}
		while ($myrow = mysql_fetch_array($connect));

	echo "<tr><td></td><td><input name=\"tv\" class=\"new_tarif\" type=\"text\" form=\"new_tp\"></td></tr>";
	
	echo "</table>";
	
	echo <<<HERE
	<br>
	<div class="center">
		<form action="/new_equipment.php" method="post" name="insert" id="new_tp">
			<a href="/"><input class="bottom" type="button" value=" Вернуться назад "></a>
			<input name="submit" class="bottom" type="submit" value="Добавить" form="new_tp">
		</form>
	</div>
HERE;
?>