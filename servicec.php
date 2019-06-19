<?
session_start();
if ($_SESSION['flag']<>'c' && $_SESSION['login'] != null){
header("Location: /service.php");
}
$_SESSION['true'] = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Личный кабинет</title>
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
						<li><a href="table.php?table=none">Администрирование данных</a></li>
						<li><a href="table.php?table=users">Пользователи системы</a></li>
						<li><a href="service.php" class="button special">Личный кабинет</a></li>
					</ul>
				</nav>
			</header>
		<!-- One -->
<section id="main" class="wrapper">
				<div class="container">

											<section>
							<h4>Системный администратор</h4>
							<p><span class="image left"><img src="images/profile_placeholder3.gif" alt="" /><?php echo ($_SESSION['login']);?></span>
														<section>
						<form action="update.php" method="post">
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Логин</th>
											<th>Пароль</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input type="text" name="login" id="login" value="" placeholder="Логин" required /></td>
											<td><input type="password" name="password" id="password" value="" placeholder="Пароль" required /></td>
										</tr>	
									</tbody>
									<tfoot>
										<tr>
											<td colspan="1"></td>
											<td><input type="submit" name="submit" value="Изменить" class="special" /></td>
										</tr>
									</tfoot>
								</table>
								</form>
								</section>
							</div>
							</p>
						</section>
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
									<a href="https://vk.com/id155401145" class="icon rounded fa-vk"><span class="label">Facebook</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
	</body>
</html>