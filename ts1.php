<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Техническое средство</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript" src="js/tcal.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<link type="text/css" rel="stylesheet" href="css/tcal.css" />
		</noscript>

	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<nav id="nav">
					<ul>
						<li><a href="index.php"class="button special">Главная</a></li>
						<li><a href="table.php?table=plan_maintenance"class="button special">План ТО</a></li>
						<li><a href="ts1.php"class="button special">Инвентаризация</a></li>
						<li><a href="service.php" class="button special">Личный кабинет</a></li>
					</ul>
				</nav>
			</header>
			<!-- One -->
		<center>
				<section id="main" class="wrapper">
				<div class="container"> 
							
								<div>
									<div>
									
									<table>
									

<form method="post" action="ts2.php" name="ind" accept-charset="utf8_general_ci">
									</table>
									</td><td bgcolor="#ffffff"></td><td>
									<table style="background-color: #e9edf">
									<caption><h2>Техническое средство</h2><p><h4>* поля, обязательные для заполнения<h4></p></caption>

									<tr>
									<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td  colspan=5 bgcolor="#f7f7f7"> <h4>Наименование: </h4> <INPUT type="text" name="name" list="reg" ></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									</tr>
<datalist id="reg">
<?php
//Связь с формой
$fid=$_POST['id_ts'];
$fname_model=$_POST['name_model'];
$ftype=$_POST['type'];
$fyear_of_manufacture=$_POST['year_of_manufacture'];
$fyear_of_commissioning=$_POST['year_of_commissioning'];
$finventary_number=$_POST['inventary_number'];
$fserial_number=$_POST['serial_number'];
$ftechnical_characteristics=$_POST['technical_characteristics'];
$fstatus=$_POST['status'];
//Подключение к серверу MySQL
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");

//Подготовка запроса на выборку
//удаление прабелов

function names()
  {
    $query="SELECT `id`, `name`
            FROM `ts`";
    $query_res=mysql_query($query);
    $names = array();
    while($row = mysql_fetch_assoc($query_res))
      {
          $names[] = $row;
      }
    return $names;
  }
$names = names();
echo "<select name='name', id_ch='id'>";
foreach($names as $item)
    { 
      echo "<option value=' ".$item['id']." '>".$item['name']."</option>";
    } 
       
echo "</select>";

?>
</select>									


</table></td></tr></table>
<br></br>
							</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="LogonBtn" value="Далее" onClick = "FormControl()" class="special" /></a>
											</li>
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
