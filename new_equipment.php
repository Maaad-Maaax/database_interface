<link rel="stylesheet" type="text/css" href="/style.css">
<?php
if ($_POST['router'] != NULL or $_POST['tv'] != NULL) 	{
	if ($_POST['router'] != NULL)
								{
								$router = $_POST['router'];
								$db = mysql_connect ("localhost","database","123");
								mysql_select_db ("i_provider", $db);
								$itog=mysql_query ("INSERT INTO routers (`Модель роутера`) VALUES ('$router')");
								echo "<h1>Роутер успешно добавлен!</h1>";
								}
								
	if ($_POST['tv'] != NULL)
								{
								$tv = $_POST['tv'];
								$db = mysql_connect ("localhost","database","123");
								mysql_select_db ("i_provider", $db);
								$itog=mysql_query ("INSERT INTO tv_box (`Модель ТВ приставки`) VALUES ('$tv')");
								echo "<h1>ТВ приставка успешно добавлена!</h1>";
								}
		}
	else {
		echo "<h1>Вы ничего не ввели!</h1>";
	}
?>
<br>
<div class="center">
<form>
	<a href="/equipment.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
</form>
</div>