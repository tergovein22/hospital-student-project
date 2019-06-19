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

$fid_workstation=$_POST['id_workstation'];
$fworkstation=$_POST['workstation'];
$fcomponent1=$_POST['component1'];
$fcomponent2=$_POST['component2'];
$fcomponent3=$_POST['component3'];
$fcomponent4=$_POST['component4'];
$fcomponent5=$_POST['component5'];
$fcomponent6=$_POST['component6'];
$fcomponent7=$_POST['component7'];
$fcomponent8=$_POST['component8'];
$fcomponent9=$_POST['component9'];
$fcomponent10=$_POST['component10'];
$fcomponent11=$_POST['component11'];
$fcomponent12=$_POST['component12'];
$fcomponent13=$_POST['component13'];
$fcomponent14=$_POST['component14'];
$fcomponent15=$_POST['component15'];
$fcomponent16=$_POST['component16'];
$fcomponent17=$_POST['component17'];
$fcomponent18=$_POST['component18'];
$fcomponent19=$_POST['component19'];
$fcomponent20=$_POST['component20'];

$flocation=$_POST['location'];
$fuser=$_POST['user'];
$fdata_release=$_POST['data_release'];
$fdata_of_destruction=$_POST['data_of_destruction'];
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
$query = "SELECT * FROM workstation";
trim($query);
$qe = "INSERT INTO workstation VALUES (NULL, '$fworkstation', '$fcomponent1','$fcomponent2','$fcomponent3','$fcomponent4','$fcomponent5','$fcomponent6','$fcomponent7','$fcomponent8','$fcomponent9','$fcomponent10','$fcomponent11','$fcomponent12','$fcomponent13','$fcomponent14','$fcomponent15','$fcomponent16','$fcomponent17','$fcomponent18','$fcomponent19','$fcomponent20', '$flocation', '$fuser', '$fdata_release','$fsdata_of_destruction', '$fstatus')";

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
				<h2>Автоматизированное рабочее место успешно добавлено</h2>
				
				
				<ul class="actions">
					<li>
						<a href="workstation.php" class="button big">Добавить автоматизированное рабочее место</a>
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