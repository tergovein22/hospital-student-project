<?
session_start();
if (!isset($_SESSION['table'])) {
header("Location: /service.php");
}
require_once 'config.php';
require_once 'function.php';
$table = $_SESSION['table'];
$id = $_GET['id'];
$id = $_GET['id'];
$db = new Database();
$edit = new Edit();

if ($table === "users") {
		$getRow = $db->getRow("SELECT login, password, position, flag FROM $table WHERE id = ?", ["$id"]);
if (isset($_POST['submit'])) {
	$post = $_POST['submit'];
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$text4 = $_POST['text4'];
	$update = $edit->$table($db,$id,$post,$text1, $text2, $text3, $text4);
				unset($_SESSION['table']);
	header("Location: /table.php?table=$table");
}

}
elseif ($table === "technical_mean") {
		$getRow = $db->getRow("SELECT name, model, serial_number, inventary_number, release_year, start_exploitation, option1, option2, option3, option4, option5, option6, option7, option8, option9, status FROM $table WHERE id = ?", ["$id"]);
if (isset($_POST['submit'])) {
	$post = $_POST['submit'];
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
	$update = $edit->$table($db,$id,$post,$text1,$text2,$text3,$text4,$text5,$text6, $text7, $text8, $text9, $text10, $text11, $text12, $text13, $text14, $text15, $text16);
				unset($_SESSION['table']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "plan_maintenance") {
		$getRow = $db->getRow("SELECT technical_means, date_plan, status FROM $table WHERE id = ?", ["$id"]);
if (isset($_POST['submit'])) {
	$post = $_POST['submit'];
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
	$update = $edit->$table($db,$id,$post,$text1,$text2,$text3);
				unset($_SESSION['table']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "workstation") {
		$getRow = $db->getRow("SELECT workstation, component1, component2, component3, component4, component5, component6, component7, component8, component9, component10, component11, component12, component13, component14, component15, component16, component17, component18, component19, component20, id_location, id_user, data_release, data_of_destruction, status FROM $table WHERE id = ?", ["$id"]);
if (isset($_POST['submit'])) {
	$post = $_POST['submit'];
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$update = $edit->$table($db,$id,$post,$text1,$text2,$text3,$text4,$text5,$text6, $text7, $text8, $text9, $text10, $text11, $text12, $text13, $text14, $text15, $text16, $text17, $text18, $text19, $text20, $text21, $text22, $text23, $text24, $text25, $text26);
				unset($_SESSION['table']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "ts") {
		$getRow = $db->getRow("SELECT name,option1,option2,option3,option4,option5,option6,option7,option8,option9 FROM $table WHERE id = ?", ["$id"]);
if (isset($_POST['submit'])) {
	$post = $_POST['submit'];
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
	$update = $edit->$table($db,$id,$post,$text1,$text2,$text3,$text4,$text5,$text6, $text7, $text8, $text9, $text10);
				unset($_SESSION['table']);
	header("Location: /table.php?table=$table");
}
}
elseif ($table === "status_maintenance") {
		$getRow = $db->getRow("SELECT status FROM $table WHERE id = ?", ["$id"]);
if (isset($_POST['submit'])) {
	$post = $_POST['submit'];
	$text1 = $_POST['text1'];
	$update = $edit->$table($db,$id,$post,$text1);
				unset($_SESSION['table']);
	header("Location: /table.php?table=$table");
}
}

elseif ($table === "responsible_for_commissioning") {
		$getRow = $db->getRow("SELECT full_name, profession, job FROM $table WHERE id = ?", ["$id"]);
if (isset($_POST['submit'])) {
	$post = $_POST['submit'];
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$update = $edit->$table($db,$id,$post,$text1,$text2,$text3);
				unset($_SESSION['table']);
	header("Location: /table.php?table=$table");
}
}

elseif ($table === "location") {
		$getRow = $db->getRow("SELECT branch, address FROM $table WHERE id = ?", ["$id"]);
if (isset($_POST['submit'])) {
	$post = $_POST['submit'];
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$update = $edit->$table($db,$id,$post,$text1,$text2);
				unset($_SESSION['table']);
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
							<form method="post" action='edit.php?id=<? echo $id?>'>
								<div>
									<div class="6u 12u$(4)">
										<h3>Редактировать</h3>
										<?$i = "1"; foreach ($getRow as $row) {
											echo "<input type='text' name='text".$i."' id='login' value='".$row."'>";
											$i++;
										}
										?>
										<br />
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="submit" value="Изменить" class="special" /></li>
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
								<li>Autor: <a href=""></a></li>
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