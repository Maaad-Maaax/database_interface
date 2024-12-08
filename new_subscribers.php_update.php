<link rel="stylesheet" type="text/css" href="/style.css">
<?php
$ID = $_POST["ID"];
$FIO = $_POST["FIO"];
$KT = $_POST["KT"];
$DP = $_POST["DP"];
$AU = $_POST["AU"];
$TP = $_POST["TP"];
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
/*------- Замена ------*/
	if ($FIO != NULL) {
	$itog=mysql_query ("UPDATE subscribers SET `ФИО абонента`='$FIO' WHERE `ID Лицевого счета` = $ID");
	}
	if ($KT != NULL) {
	$itog=mysql_query ("UPDATE subscribers SET `Контактный телефон`='$KT' WHERE `ID Лицевого счета` = $ID");
	}
	if ($DP != NULL) {
	$itog=mysql_query ("UPDATE subscribers SET `Дата подключения`='$DP' WHERE `ID Лицевого счета` = $ID");
	}
	if ($AU != NULL) {
	$itog=mysql_query ("UPDATE subscribers SET `Адрес установки`='$AU' WHERE `ID Лицевого счета` = $ID");
	}
	if ($TP != NULL and $TP != $myrow['Технология подключения']) {
	$itog=mysql_query ("UPDATE subscribers SET `Технология подключения`='$TP' WHERE `ID Лицевого счета` = $ID");
	}
	echo "<h1>Изменения успешно внесены!</h1>";
?>

<br>
<div class="center">
<form>
	<a href="/subscribers.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
</form>
</div>
				