<link rel="stylesheet" type="text/css" href="/style.css">
<?php

/*--------------------------------------   УСЛУГИ --------------------------------------*/
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
	/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM tariff_plan",$db);
	$myrow = mysql_fetch_array($connect);
	/*Вывод из массива данных*/
	echo <<<HERE
	<div class="service-top">
		<div class="service-header" ><h2>Услуги</h2>
			<div class="service">
				<form>
					<p>Интернет: <input type="checkbox" name="EC" form="new_tp" value="1" checked></p>
					<p>Цифровое ТВ: <input type="checkbox" name="CTV" form="new_tp" value="1" checked></p>
					<p>Сотовая связь: <input type="checkbox" name="SS" form="new_tp" value="1" checked></p>
					<p>Проводная связь: <input type="checkbox" name="PS" form="new_tp" value="1" checked></p>
					<p>Тарифный план: <select class="select" form="new_tp" name="TPP">
HERE;
	do 
		{		
		echo "<option>".$myrow['ID Тарифного плана']."</option>";
		}
	while ($myrow = mysql_fetch_array($connect));

	echo "</select></p>";
	echo "<p>ID Карты доступа: <select class=\"select\" name=\"IDPK\" form=\"new_tp\">";
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM access_card",$db);
	$myrow = mysql_fetch_array($connect);
/*Вывод из массива данных*/
	do 
		{
		if ($myrow['Статус'] == NULL) {			
				echo "<option>".$myrow['ID карты доступа']."</option>";
			}
		}
	while ($myrow = mysql_fetch_array($connect));
	echo "</select></p></form></div></div>";
	
	
/*--------------------------------------   ЛИНИЯ --------------------------------------*/
echo <<<HERE
<div class="service-header" ><h2>Линия</h2>
	<div class="service" >
		<form>
			<p>Расположение РК подъезд: <select class="select" form="new_tp" name="RKP">
				<option>1 подъезд</option>
				<option>2 подъезд</option>
				<option>3 подъезд</option>
				<option>4 подъезд</option>
				<option>5 подъезд</option>
				<option>6 подъезд</option>
				<option>7 подъезд</option>
				<option>8 подъезд</option>
				<option>9 подъезд</option>
				<option>10 подъезд</option>
			</select></p>
			<p>Расположение РК этаж: <select class="select" form="new_tp" name="RKE">
				<option>1 этаж</option>
				<option>2 этаж</option>
				<option>3 этаж</option>
				<option>4 этаж</option>
				<option>5 этаж</option>
				<option>6 этаж</option>
				<option>7 этаж</option>
				<option>8 этаж</option>
				<option>9 этаж</option>
				<option>10 этаж</option>
				<option>11 этаж</option>
				<option>12 этаж</option>
				<option>13 этаж</option>
				<option>14 этаж</option>
				<option>15 этаж</option>
				<option>16 этаж</option>
				<option>17 этаж</option>
				<option>18 этаж</option>
				<option>19 этаж</option>
				<option>20 этаж</option>
			</select></p>
			<p>Расположение коммутатора подъезд: <select class="select" form="new_tp" name="KP">
				<option>1 подъезд</option>
				<option>2 подъезд</option>
				<option>3 подъезд</option>
				<option>4 подъезд</option>
				<option>5 подъезд</option>
				<option>6 подъезд</option>
				<option>7 подъезд</option>
				<option>8 подъезд</option>
				<option>9 подъезд</option>
				<option>10 подъезд</option>
			</select></p>
			<p>Расположение коммутатора этаж: <select class="select" form="new_tp" name="KE">
				<option>1 этаж</option>
				<option>2 этаж</option>
				<option>3 этаж</option>
				<option>4 этаж</option>
				<option>5 этаж</option>
				<option>6 этаж</option>
				<option>7 этаж</option>
				<option>8 этаж</option>
				<option>9 этаж</option>
				<option>10 этаж</option>
				<option>11 этаж</option>
				<option>12 этаж</option>
				<option>13 этаж</option>
				<option>14 этаж</option>
				<option>15 этаж</option>
				<option>16 этаж</option>
				<option>17 этаж</option>
				<option>18 этаж</option>
				<option>19 этаж</option>
				<option>20 этаж</option>
			</select></p>
		</form>
	</div>
</div>
HERE;

/*--------------------------------------   АБОНЕНТ --------------------------------------*/
echo <<<HERE
<div class="service-header" ><h2>Абонент</h2>
	<div style="height: 340px;" class="service">
		<form>
			<p>№ Лицевого счета: <select class="select" form="new_tp" name="NLS">
HERE;
$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM subscribers ORDER BY `ID Лицевого счета` DESC",$db);
	$myrow = mysql_fetch_array($connect);
/*Вывод из массива данных*/
$myrow['ID Лицевого счета'] = $myrow['ID Лицевого счета'] + 1;
echo "<option>".$myrow['ID Лицевого счета']."</option>";	
echo <<<HERE
			</select></p>
			<p>ФИО абонента:<br><input name="FIO" class="new_tarif" type="text" form="new_tp"></p>
			<p>№ телефона:<br><input name="NT" class="new_tarif" type="text" form="new_tp"></p>
			<p>Дата подключения:<br><input name="DP" class="new_tarif" type="text" form="new_tp"></p>
			<p>Адресс установки:<br><input name="AU" class="new_tarif" type="text" form="new_tp"></p>
			<select class="select" form="new_tp" name="TP">
				<option>PON</option>
				<option>FTTx</option>
				<option>ADSL</option>
			</select>
		</form>
	</div>
</div>
HERE;


/*--------------------------------------   ОБОРУДОВАНИЕ --------------------------------------*/
echo <<<HERE
<div class="service-header"><h2>Оборудование</h2>
	<div class="service">
		<form>
			<p>Роутер:<br><select class="select" form="new_tp" name="RUT">
HERE;
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM routers",$db);
	$myrow = mysql_fetch_array($connect);
/*Вывод из массива данных*/
	do 
		{		
		echo "<option>".$myrow['ID роутера']."</option>";
		}
	while ($myrow = mysql_fetch_array($connect));
echo <<<HERE
			</select></p>
			<p>ТВ приставка:<br><select class="select" name="TVS" form="new_tp">
HERE;
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
/*Определение таблицы*/
	$connect = mysql_query("SELECT * FROM tv_box",$db);
	$myrow = mysql_fetch_array($connect);
/*Вывод из массива данных*/
	do 
		{		
		echo "<option>".$myrow['ID ТВ приставки']."</option>";
		}
	while ($myrow = mysql_fetch_array($connect));
echo <<<HERE
			</select></p>
		</form>
	</div>
	<form action="/new_subscribers_insert.php" method="post" name="insert" id="new_tp">
		<a href="/"><input class="bottom" type="button" value=" Вернуться назад "></a>
		<input name="submit" class="bottom" type="submit" value="Добавить" form="new_tp">
	</form>
</div>
</div>
HERE;
?>