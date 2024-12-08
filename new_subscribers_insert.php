<link rel="stylesheet" type="text/css" href="/style.css">
<?php
$EC = $_POST["EC"];   
$CTV = $_POST["CTV"];
$SS = $_POST["SS"];
$PS = $_POST["PS"];
$TPP = $_POST["TPP"];
$IDPK = $_POST["IDPK"];

$RKP = $_POST["RKP"];
$RKE = $_POST["RKE"];
$KP = $_POST["KP"];
$KE = $_POST["KE"];

$NLS = $_POST["NLS"];
$FIO = $_POST["FIO"];
$NT = $_POST["NT"];
$DP = $_POST["DP"];
$AU = $_POST["AU"];
$TP = $_POST["TP"];

$RUT = $_POST["RUT"];
$TVS = $_POST["TVS"];

/*-------------------------------------------------------  Услуги ----------------------------------*/
	$db = mysql_connect ("localhost","database","123");
	mysql_select_db ("i_provider", $db);
	$itog=mysql_query ("INSERT INTO services (`ID услуги`,`Интернет`,`Цифровое ТВ`,`Сотовая связь`,`Проводная связь`,`ID тарифного плана`,`ID карты доступа`) VALUES ('$NLS','$EC','$CTV','$SS','$PS','$TPP','$IDPK')"); 


/*-------Смена статуса карты доступа ------*/
	$itog=mysql_query ("UPDATE access_card SET Статус='Занят' WHERE `ID карты доступа` = $NLS");
	
/*-------------------------------------------------------  Линия ----------------------------------*/
	$itog=mysql_query ("INSERT INTO line (`ID линии`,`Расположение РК подъезд`,`Расположение РК этаж`,`Расположение коммутатора подъезд`,`Расположение коммутатора этаж`) VALUES ('$NLS','$RKP','$RKE','$KP','$KE')");

/*-------------------------------------------------------  Абонент ----------------------------------*/
	$itog=mysql_query ("INSERT INTO subscribers (`ID Лицевого счета`,`ФИО абонента`,`Контактный телефон`,`Дата подключения`,`Адрес установки`,`Технология подключения`,`Услуги`,`Линия`,`Оборудование`) VALUES ('$NLS','$FIO','$NT','$DP','$AU','$TP',$NLS,$NLS,$NLS)");

/*-------------------------------------------------------  Оборудование ----------------------------------*/
	$itog=mysql_query ("INSERT INTO equipment (`ID категории`,`ID роутера`,`ID ТВ приставки`) VALUES ('$NLS','$RUT','$TVS')");
	
	echo "<h1>Абонент успешно добавлен!</h1>";
?>
<div class="center">
	<form>
		<a href="/new_subscribers.php"><input class="bottom" type="button" value=" Вернуться назад "></a>
	</form>
</div>