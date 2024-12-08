<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	$ID = $_POST['ID'];
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db); 
	$itog=mysql_query ("DELETE FROM routers WHERE `ID роутера` = $ID");
	echo "<h1>Запись удалена!</h1>";
?>
<br>
<div class="center">
	<form action="/new_tariff_plan.php" method="post" name="insert" id="new_tp">
		<a href="/equipment.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
	</form>
</div>