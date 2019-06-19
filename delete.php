<?
//Проверка авторизации
//Поиск флага доступа юзера
//Редирект на сервис страницу по флагу
session_start();
if (!isset($_SESSION['table'])) {
header("Location: /service.php");
}
require_once 'config.php';
$db = new Database();
if (isset($_GET['id'])) {
	$table = $_SESSION['table'];
	$id = $_GET['id'];
	$deleteRow = $db->deleteRow("DELETE FROM $table WHERE id = ?", ["$id"]);
	$db->Disconnect();
	unset($_SESSION['table']);
	header("Location: /table.php?table=$table");
}
?>