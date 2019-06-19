<?
//Проверка авторизации
//Поиск флага доступа юзера
//Редирект на сервис страницу по флагу
session_start();
if (!isset($_SESSION['login'])) {
header("Location: /auth.php");
}
require_once 'config.php';
$db = new Database();
$login = $_SESSION['login'];
$getRow = $db->getRow("SELECT * FROM users WHERE login = ?", ["$login"]);
if ($getRow <> null) {
		$_SESSION['flag'] = $getRow['flag'];
if($getRow['flag'] === "a"){header("Location: /servicea.php");}
elseif($getRow['flag'] === "b"){header("Location: /serviceb.php");}
elseif($getRow['flag'] === "c"){header("Location: /servicec.php");}
elseif($getRow['flag'] === "d"){header("Location: /serviced.php");}
	$db->Disconnect();
}else{	
	unset($_SESSION['login']);
	header("Location: /auth.php");	
}
?>