<?
session_start();
require_once 'config.php';
if (isset($_POST['submit'])) {
	if ( $_POST['name'] <> null && $_POST['email'] <> null && $_POST['txt'] <> null) {
		$name = $_POST['name'];
$email = $_POST['email'];
$txt = $_POST['txt'];
$db = new Database();
$getRow = $db->insertRow("INSERT INTO request(name, email, txt) VALUE(?, ?, ?)", ["$name", "$email", "$txt"]);
$db->Disconnect();
$_SESSION['true'] = $name;
header("Location: /true.php");
}
}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Подать заявку</title>
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
						<li><a href="request.php" class="button special">Подать заявку</a></li>
						<li><a href="service.php">Сервис служб</a></li>
					</ul>
				</nav>
			</header>
		<!-- One -->
		<center>
				<section id="main" class="wrapper">
				<div class="container">
							<form method="post" action="request.php">
								<div>
									<div class="6u 12u$(4)">
										<h3>Подача заявки</h3>
										<input type="text" name="name" id="name" value="" placeholder="Ваше Имя" />
										<input type="text" name="email" id="email" value="" placeholder="Email" />
										<input type="text" name="txt" id="txt" value="" placeholder="Описание" /></br>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="submit" value="Подать" class="special" /></li>
											<li><input type="reset" value="Отмена" /></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
						</section></center>
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