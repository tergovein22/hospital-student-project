<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Главная</title>
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
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<nav id="nav">
					<ul>
						<li><a href="index.php" class="button special">Главная</a></li>
						<li><a href="request.php">Подать заявку</a></li>
						<li><a href="service.php">Сервис служб</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Информационная система "Обслуживание технических средств и оборудования"</h2><br>
				<p>Содержит модули:</p>
				<i>Журнал технического обслуживания и инвентаризация</i><br>
				<i>Обработка заявок на ремонт</i><br>
				<i>Планирование технического обслуживания</i><br><br>
				<i>на основе документации ГБУЗ РМ "Поликлиника №4"</i>				
			</section>
		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>FAQ</h2>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color1 fa-code"></i>
								<h3>Разработка</h3>
								<p><?= 'Текущая версия PHP: ' . phpversion();?><br>
								Текущая версия DataBase: MySQL</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color9 fa-tablet"></i>
								<h3>Оптимизация</h3>
								<p>Полностью оптимизирован под любое устройство.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color6 fa fa-cog fa-spin fa-2x fa-fw"></i>
								<h3>Функционал</h3>
								<p>Минимальные загрузки страницы. <? $start = microtime(true);echo 'Скорость загрузки страницы: ' . ( microtime(true) - $start ) . ' сек.';?></p>
							</section>
						</div>
					</div>
				</div>
			</section>
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