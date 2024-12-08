<link rel="stylesheet" type="text/css" href="/style.css">
<?php
if (isset($_POST['name'])) {
							$IDN = $_POST['name'];
							$IDS = $_POST['speed'];
							$IDTV = $_POST['TV'];
							$IDSS = $_POST['ss'];
							$IDSSP = $_POST['ssp'];
							$IDP = $_POST['pocit'];
							$IDC = $_POST['cmps'];
							$IDCTP = $_POST['ctp'];
							$db = mysql_connect ("localhost","database","123");
							mysql_select_db ("i_provider", $db);
							$itog = mysql_query ("INSERT INTO tariff_plan (`Наименование`,`Скорость соединения`,`К-во ТВ каналов`,`К-во минут сотовой связи`,`Цена мин. сверх пакета`,`Пакет интернет трафика`,`Цена мин. проводной связи`,`Цена тарифа`) VALUES ('$IDN','$IDS','$IDTV','$IDSS','$IDSSP','$IDP','$IDC','$IDCTP')");
							}
							echo "<h1>Тарифный план успешно добавлен!</h1>";
?>
<br>
<div class="center">
	<form>
		<a href="/tariff_plan.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
	</form>
</div>