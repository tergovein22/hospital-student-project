<?
session_start();
ini_set('display_errors', 0);
require_once 'config.php';
if (!isset($_SESSION['login'])) {
header("Location: /auth.php");
}
$flag = $_SESSION['flag'];
$table = $_GET['table'];
$_SESSION['table'] = $table;
if ($table <> "none") {
	$db = new Database();
$getRows = $db->getRows("SELECT * FROM $table");
}else{
		if (isset($_POST['tablesubmit'])) {
		$table = $_POST['tablenone'];
		header("Location: /table.php?table=$table");

	}}
if ($table === "users" ){$tds=$td1;$ths=$th1;}
elseif ($table === "technical_mean"){$tds=$td2;$ths=$th2;}
elseif ($table === "plan_maintenance"){$tds=$td3;$ths=$th3;}
elseif ($table === "workstation"){$tds=$td4;$ths=$th4;}
elseif ($table === "ts"){$tds=$td5;$ths=$th5;}
elseif ($table === "status_maintenance"){$tds=$td6;$ths=$th6;}
elseif ($table === "responsible_for_commissioning"){$tds=$td7;$ths=$th7;}
elseif ($table === "location"){$tds=$td8;$ths=$th8;}

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
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
						<li><a href="service.php" class="button special">Личный кабинет</a></li>
					</ul>
				</nav>
			</header>
		<!-- One -->
				<section id="main" class="wrapper">
				<div class="container">
										<? if ($table === "none"){ 
											echo '
											<form method="post" action="table.php?table=none">
											<div class="select-wrapper">
											<select name="tablenone" id="category">
												<option value="">- Таблицы -</option>
												<option value="users">Пользователи</option>
												<option value="technical_mean">Технические средства</option>
												<option value="plan_maintenance">План технического обслуживания</option>
												<option value="ts">Параметры технических средств</option>
												<option value="status_maintenance">Статус</option>
												<option value="responsible_for_commissioning">Материально-ответственные лица</option>
												<option value="location">Местоположение</option>
												<option value="workstation">Автоматизированные рабочие места</option>
											</select>
										</div>
										<input type="submit" name="tablesubmit" class="button small" value="Ввод данных" />
									</form>';}
									else{echo '
										<a href="add.php"><input type="submit" name="submit" class="button small" value="Добавить" /></a>
										<button class="button small">Печать</button>
										<input type="text" class="form-control pull-left" id="search" placeholder="Поиск по таблице">
                    			<div id="printTable">
								<style type="text/css">
								        th,
								        td 
								        {
								        padding: 4px 4px 4px 4px ;
								        }
								        th 
								        {
								        border-top: 2px solid #333333 ;
								        border-bottom: 2px solid #333333 ;
								    	}
								        td 
								        {
								        border-bottom: 1px dotted #999999 ;
								        }
    							</style>';}?>
									<table id="mytable">
										   <tr>
										   	<? foreach ($ths as $th) {
										   		echo "<th>".$th."</th>";
										   	}
										   	if ($_SESSION['flag'] <> 'b') {
												echo "<th></th>";
												echo "<th></th>";
											}
										   	 ?>
   											</tr>
										<?foreach ($getRows as $Row) {
											echo "<tr>";

											foreach ($tds as $td) {
												echo "<td>".$Row[$td]."</td>";
											}
											if ($_SESSION['flag'] <> 'b') {
												echo '<td><a href="edit.php?id='.$Row['id'].'">Изменить</a></td>';
												echo '<td><a href="delete.php?id='.$Row['id'].'">Удалить</a></td>';
											}											
											
											echo "</tr>";
										} ?>
									</table>
								
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
								<<li><a href="http://www.rkdc13.ru/">ГБУЗ РМ "Поликлиника №4"</a></li>
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
			        <script>
        $(document).ready(function(){
            $("#search").keyup(function(){
                _this = this;
                $.each($("#mytable tbody tr"), function() {
                    if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                       $(this).hide();
                    else
                       $(this).show();                
                });
            });
        });
        </script>
        <script type="text/javascript">
        	function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})
        </script>
	</body>
</html>