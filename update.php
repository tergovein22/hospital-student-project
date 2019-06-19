<?
//Смена учетных данных
//Проверка на логин
//Проверка на нажатие кнопки изменить
session_start();
if (!isset($_SESSION['login'])) {
header("Location: /auth.php");
}
if (!isset($_SESSION['true'])) {
	header("Location: /index.php");
}
unset($_SESSION['true']);
require_once 'config.php';
$db = new Database();
if (isset($_POST['submit'])) {
	if ( $_POST['password'] <> null && $_POST['login'] <> null) {
$password = $_POST['password'];
$login = $_POST['login'];
$id = $_SESSION['id'];
$updateRow = $db->updateRow("UPDATE users SET password = ?, login = ? WHERE id = ?", ["$password", "$login", "$id"]);
	$db->Disconnect();
	$_SESSION['login'] = $login;
	header("Location: /service.php");
}
else{
		header("Location: /service.php");
}
}
?>