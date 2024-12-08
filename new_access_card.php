<link rel="stylesheet" type="text/css" href="/style.css">
<?php
	if ($_POST['login'] != NULL and $_POST['password'] != NULL)
		{
		$login = $_POST['login'];
		$password = $_POST['password'];
		$db = mysql_connect ("localhost","database","123");
		mysql_select_db ("i_provider", $db);
		$itog=mysql_query ("INSERT INTO access_card (`Логин`,`Пароль`) VALUES ('$login','$password')");
		}
		echo "<h1>Логин: ".$login." и пароль: ".$password." успешно добавлен!</h1>";
?>
<br>
<div class="center">
	<form>
		<a href="/access_card.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
	</form>
</div>