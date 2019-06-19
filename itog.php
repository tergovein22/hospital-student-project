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
						<li><a href="index.php">Главная</a></li>
						<li><a href="table.php?table=plan_maintenance">План ТО</a></li>
						<li><a href="ts1.php">Инвентаризация</a></li>
						<li><a href="service.php" class="button special">Личный кабинет</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
			<?php 
//Связь с формой

$fid_ts=$_POST['id_ts'];
$fname=$_POST['name'];
$fmodel=$_POST['model'];
$fserial_number=$_POST['serial_number'];
$finventary_number=$_POST['inventary_number'];
$frelease_year=$_POST['release_year'];
$fstart_exploitation=$_POST['start_exploitation'];
$foption1=$_POST['option1'];
$foption2=$_POST['option2'];
$foption3=$_POST['option3'];
$foption4=$_POST['option4'];
$foption5=$_POST['option5'];
$foption2=$_POST['option6'];
$foption3=$_POST['option7'];
$foption4=$_POST['option8'];
$foption5=$_POST['option9'];
$fstatus=$_POST['status'];

//Подключение к серверу MySQL
$db = mysql_connect("localhost", "root", "");
if(!$db)
{
print"Ошибка соединения с сервером MySQL";
exit;
}
//Выбор базы данных
$er = mysql_select_db("accounting_");
if(!$er)
{
print"Нет соединения с базой данных";
exit;
}
//Подготовка запроса
$query = "SELECT * FROM technical_mean";
trim($query);
$qe = "INSERT INTO technical_mean VALUES (NULL, '$fname', '$fmodel', '$fserial_number', '$finventary_number', '$frelease_year','$fstart_exploitation' , '$foption1', '$foption2', '$foption3', '$foption4', '$foption5', '$foption6','$foption7','$foption8','$foption9','$fstatus')";

//Выполнение зап роса
$result=mysql_query($qe);
if(!$result)
{
print"Запрос не выполнен";
$error=mysql_error();
print "<p>" . $error . "</p>";
exit;
}

?>
				<h2>Техническое средство успешно добавлено</h2>
				
				
				<ul class="actions">
					<li>
						<a href="ts1.php" class="button big">Добавить техническое средство</a>
					</li>
				</ul>
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
								<p>Минимальные загрузки страницы. <? $start = microtime(true); echo $start;echo 'Скорость загрузки страницы: ' . ( microtime(true) - $start ) . ' сек.';?></p>
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