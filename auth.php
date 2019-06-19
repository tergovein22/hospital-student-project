<?
session_start();
require_once 'config.php';
if (isset($_SESSION['login'])) {
}
if (isset($_POST['submit'])) {
$password = $_POST['password'];
$login = $_POST['login'];
$db = new Database();
$getRow = $db->getRow("SELECT * FROM users WHERE login = ?", ["$login"]);
if ($getRow['password'] === $password) {
	$_SESSION['login'] = $getRow['login'];
	$_SESSION['id'] = $getRow['id'];
	header("Location: /service.php");}}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Авторизация</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav id="nav">
					<ul>
						<li><a href="index.php">Главная</a></li>
						<li><a href="request.php">Подать заявку</a></li>
						<li><a href="service.php" class="button special">Сервис служб</a></li>
					</ul>
				</nav>
			</header>
		<!-- One -->
		<center>
				<section id="main" class="wrapper">
				<div class="container">
							<form method="post" action="auth.php">
								<div>
									<div class="6u 12u$(4)">
										<h3>Авторизация</h3>
										<input type="text" name="login" id="name" value="" placeholder="Логин" />
										<input type="password" name="password" id="email" value="" placeholder="Пароль" /></br>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="submit" value="Войти" class="special" /></li>
											<li><input type="reset" value="Отмена" /></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
						</section></center><br />
			<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy;</li>
								<li><a href="http://www.rkdc13.ru/">ГБУЗ РМ "Поликлиника №4"</a></li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a href="" class="icon rounded fa-vk"><span class="label">Facebook</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
	</body>
</html>