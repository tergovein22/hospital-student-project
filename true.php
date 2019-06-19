<?
session_start();
if (!isset($_SESSION['true'])) {
	header("Location: /index.php");
}
unset($_SESSION['true']);
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Авторизация</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
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
						<li><a href="request.php" class="button special">Подать заявку</a></li>
						<li><a href="service.php">Сервис служб</a></li>
					</ul>
				</nav>
			</header>
		<!-- One -->
					<section id="main" class="wrapper">
				<div class="container">
					<center>
							<h2>Заявка принята</h2>
							<h4>Если вы видете это сообщение, то ваша заявка успешно принята.</h4>
								<div class="3u 6u(2) 12u$(3)">
									<ul class="actions vertical">
										<li><a href="index.php" class="button fit">Главная</a></li>
									</ul>
								</div>
							<br/><br/><br/>
						</center></div></section>
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