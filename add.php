<?
session_start();
if (!isset($_SESSION['table'])) {
header("Location: /service.php");
}
unset($table);
require_once 'config.php';
$table = $_SESSION['table'];
$db = new Database();
if ($table === "users") {
		$ths = [
    "Логин" => "Логин","Пароль" => "Пароль","Роль" => "Роль"
];
if (isset($_POST['frizzes'])) {
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	if ($text3 === "внутренние службы"){$flag = "a";}
	elseif($text3 === "сторонние службы"){$flag = "b";}
	elseif($text3 === "администратор системы"){$flag = "c";}
	elseif($text3 === "администратор предприятия"){$flag = "d";}
	else{$flag = "b";}
	$insertRow = $db->insertRow("INSERT INTO users(login, password, position, flag) VALUE(?, ?, ?, ?)", [$text1, $text2, $text3, $flag]);
				unset($_SESSION['table']);
				unset($_POST['frizzes']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "request") {
		$ths = [
    "Имя" => "Имя",
    "Email" => "Email",
    "Текст" => "Текст"
];
if (isset($_POST['frizzes'])) {
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$insertRow = $db->insertRow("INSERT INTO request(name, email, txt) VALUE(?, ?, ?)", [$text1, $text2, $text3]);
				unset($_SESSION['table']);
				unset($_POST['frizzes']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "technical_mean") {
		$ths = [
    "Наименование" => "Наименование","Модель" => "Модель","Серийный номер" => "Серийный номер","Инвентарный номер" => "Инвентарный номер","Год выпуска" => "Год выпуска","Дата ввода в эксплуатацию" => "Дата ввода в эксплуатацию","Параметр1" => "Параметр1","Параметр2" => "Параметр2","Параметр3" => "Параметр3","Параметр4" => "Параметр4","Параметр5" => "Параметр5","Параметр6" => "Параметр6","Параметр7" => "Параметр7","Параметр8" => "Параметр8","Параметр9" => "Параметр9","Статус" => "Статус",
];
if (isset($_POST['frizzes'])) {
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$text4 = $_POST['text4'];
	$text5 = $_POST['text5'];
	$text6 = $_POST['text6'];
	$text7 = $_POST['text7'];
	$text8 = $_POST['text8'];
	$text9 = $_POST['text9'];
	$text10 = $_POST['text10'];
	$text11 = $_POST['text11'];
	$text12 = $_POST['text12'];
	$text13 = $_POST['text13'];
	$text14 = $_POST['text14'];
	$text15 = $_POST['text15'];
	$text16 = $_POST['text16'];
	$insertRow = $db->insertRow("INSERT INTO technical_mean(name, model, serial_number, inventary_number, release_year, start_exploitation, option1, option2, option3, option4, option5, option6, option7, option8, option9, status) VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$text1, $text2, $text3, $text4, $text5, $text6, $text7, $text8, $text9, $text10, $text11, $text12, $text13, $text14, $text15, $text16]);
				unset($_SESSION['table']);
				unset($_POST['frizzes']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "plan_maintenance") {
		$ths = [
    "Технические средства" => "Технические средства",
    "Дата" => "Дата",
    "Статус" => "Статус",
];
if (isset($_POST['frizzes'])) {
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$insertRow = $db->insertRow("INSERT INTO plan_maintenance(technical_means, date_plan, status) VALUE(?, ?, ?)", [$text1, $text2, $text3]);
				unset($_SESSION['table']);
				unset($_POST['frizzes']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "location") {
		$ths = [
    "Филиал" => "Филиал",
    "Адрес" => "Адрес",
];
if (isset($_POST['frizzes'])) {
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$insertRow = $db->insertRow("INSERT INTO location(branch, address) VALUE(?, ?)", [$text1, $text2]);
				unset($_SESSION['table']);
				unset($_POST['frizzes']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "responsible_for_commissioning") {
		$ths = [
    "ФИО" => "ФИО",
    "Профессия" => "Профессия",
    "Место работы" => "Место работы",
];
if (isset($_POST['frizzes'])) {
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$insertRow = $db->insertRow("INSERT INTO responsible_for_commissioning(full_name, profession, job) VALUE(?, ?, ?)", [$text1, $text2, $text3]);
				unset($_SESSION['table']);
				unset($_POST['frizzes']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "status_maintenance") {
		$ths = [
    "Статус" => "Статус",
];
if (isset($_POST['frizzes'])) {
	$text1 = $_POST['text1'];
	$insertRow = $db->insertRow("INSERT INTO status_maintenance(status) VALUE(?)", [$text1]);
				unset($_SESSION['table']);
				unset($_POST['frizzes']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "ts") {
		$ths = [
    "Наименование" => "Наименование","Параметр1" => "Параметр1","Параметр2" => "Параметр2","Параметр3" => "Параметр3","Параметр4" => "Параметр4","Параметр5" => "Параметр5","Параметр6" => "Параметр6","Параметр7" => "Параметр7","Параметр8" => "Параметр8","Параметр9" => "Параметр9",
];
if (isset($_POST['frizzes'])) {
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$text4 = $_POST['text4'];
	$text5 = $_POST['text5'];
	$text6 = $_POST['text6'];
	$text7 = $_POST['text7'];
	$text8 = $_POST['text8'];
	$text9 = $_POST['text9'];
	$text10 = $_POST['text10'];
	$insertRow = $db->insertRow("INSERT INTO ts(name, option1, option2, option3, option4, option5, option6, option7, option8, option9) VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$text1, $text2, $text3, $text4, $text5, $text6, $text7, $text8, $text9, $text10]);
				unset($_SESSION['table']);
				unset($_POST['frizzes']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "workstation") {
		$ths = [
    "Рабочая станция" => "Рабочая станция", "Компонент1","Компонент2","Компонент3","Компонент4","Компонент5","Компонент6","Компонент7","Компонент8","Компонент9","Компонент10","Компонент11","Компонент12","Компонент13","Компонент14","Компонент15","Компонент16","Компонент17","Компонент18","Компонент19","Компонент20","Местоположение","Пользователь","Дата введения","Дата деструкции","Статус",
];
if (isset($_POST['frizzes'])) {
	$text1 = $_POST['text1'];
		$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$text4 = $_POST['text4'];
	$text5 = $_POST['text5'];
	$text6 = $_POST['text6'];
	$text7 = $_POST['text7'];
	$text8 = $_POST['text8'];
	$text9 = $_POST['text9'];
	$text10 = $_POST['text10'];
	$text11 = $_POST['text11'];
	$text12 = $_POST['text12'];
	$text13 = $_POST['text13'];
	$text14 = $_POST['text14'];
	$text15 = $_POST['text15'];
	$text16 = $_POST['text16'];
	$text17 = $_POST['text17'];
	$text18 = $_POST['text18'];
	$text19 = $_POST['text19'];
	$text20 = $_POST['text20'];
	$text21 = $_POST['text21'];
	$text22 = $_POST['text22'];
	$text23 = $_POST['text23'];
	$text24 = $_POST['text24'];
	$text25 = $_POST['text25'];
	$text26 = $_POST['text26'];
	$insertRow = $db->insertRow("INSERT INTO workstation(workstation, component1, component2, component3, component4, component5, component6, component7, component8, component9, component10, component11, component12, component13, component14, component15, component16, component17, component18, component19, component20, id_location, id_user, data_release, data_of_destruction, status) VALUE(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", [$text1, $text2, $text3, $text4, $text5, $text6, $text7, $text8, $text9, $text10, $text11, $text12, $text13, $text14, $text15, $text16, $text17, $text18, $text19, $text20, $text21, $text22, $text23, $text24, $text25, $text26]);
				unset($_SESSION['table']);
				unset($_POST['frizzes']);
	header("Location: /table.php?table=$table");
}
}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Редактор</title>
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
							<form method="post" action='add.php'>
								<div>
									<div class="6u 12u$(4)">
										<h3>Добавить</h3>
										<? $i = "1"; 
										foreach ($ths as $th){
										echo "<input type='text' name='text".$i."' id='login' value='".$th."'>";
											$i++;
										}
										?>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="frizzes" value="Добавить" class="special" /></li>
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