<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	$ID = $_POST['ID'];
	$I = $_POST['I'];
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db); 
	$itog=mysql_query ("UPDATE routers SET `Модель роутера`='$I' WHERE `ID роутера` = $ID");
	echo "<h1>Изменения успешно внесены!</h1>";
?>
<br>
<div class="center">
	<form action="/new_tariff_plan.php" method="post" name="insert" id="new_tp">
		<a href="/equipment.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
	</form>
</div>