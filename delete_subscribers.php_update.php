<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	$ID = $_POST['ID'];
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db); 
	/*---------- Удаление записи об абоненте -------*/
	$itog=mysql_query ("DELETE FROM subscribers WHERE `ID Лицевого счета` = $ID");

	
	/*---------- Удаление записи об услуге -------*/
	$itog=mysql_query ("DELETE FROM services WHERE `ID услуги` = $ID");

	
	/*---------- Удаление записи о линии -------*/
	$itog=mysql_query ("DELETE FROM line WHERE `ID линии` = $ID");

	
	/*---------- Удаление записи об оборудование -------*/
	$itog=mysql_query ("DELETE FROM equipment WHERE `ID категории` = $ID");
	echo "<h1>Запись удалена!</h1>";
?>
<br>
<div class="center">
	<form>
		<a href="/subscribers.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
	</form>
</div>