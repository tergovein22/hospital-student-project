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
									

<form method="post" action="itog.php" name="ind" accept-charset="utf8_general_ci">
									</table>
									</td><td bgcolor="#ffffff"></td><td>
									<table style="background-color: #e9edf">
									<caption><h2>Техническое средство</h2><p><h4>* поля, обязательные для заполнения<h4></p></caption>

									<tr>
									<td   bgcolor="#f7f7f7"> <h4>ТС: </h4> <INPUT type="text" name="name" list="" value="<?php echo $fname=$_POST['name']?>" readonly ></td>

									<td   bgcolor="#f7f7f7"> <h4>Модель: </h4> <INPUT type="text" name="model" list="reg1" ></td>
									<td  bgcolor="#f7f7f7"><h4>Год выпуска *: </h4><INPUT type="date" name="release_year" list="" required></td>
									</tr>
<datalist id="reg1">									
<?php
//Связь с формой
$fid=$_POST['id'];
$fname=$_POST['name'];
//settype($fname,"integer");

 //   $fname = trim($fname); 
 //   $fname = mysql_real_escape_string($fname);
 //   $fname = htmlspecialchars($fname);

//Подключение к серверу MySQL
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
echo $fname;
//Подготовка запроса на выборку
//удаление прабелов

function names1()
  {

    $query="SELECT `id`, `name`, `model`
            FROM `technical_mean` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
    $names = array();
	
    while($row = mysql_fetch_assoc($query_res))
      {
          $names1[] = $row;
      }
    return $names1;
  }
$names1 = names1();
echo "<select model='model', id='id'>";
foreach($names1 as $item)
    { 
      echo "<option value=' ".$item['model']." '>".$item['id']."</option>";
    } 
       
echo "</select>";

?>
</select>									
									
									<tr>
									<td  bgcolor="#f7f7f7"><h4>Серийный номер: </h4> <INPUT type="text" name="serial_number" list="" ></td>

									<td  bgcolor="#f7f7f7"> <h4>Инвентарный номер: *</h4> <INPUT type="text" name="inventary_number" list="" required></td>
<td bgcolor="#f7f7f7"><h4>Дата ввода в эксплуатацию: *</h4><INPUT type="date" name="start_exploitation" class="tcal" value="" required list="4">
									</tr>
									<tr bgcolor="#f7f7f7">
									
                                    </tr>

									<tr>
									<td  bgcolor="#f7f7f7"> <h4>
									<?php
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
//Подготовка запроса на выборку
//удаление прабелов
$quer = "SELECT * FROM technical_mean";
trim($quer);
$query="INSERT INTO `technical_mean` VALUES(NULL, '".$_POST['name']."')";
    $query="SELECT `option1`
            FROM `ts` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
	while ($result = mysql_fetch_array($query_res)){
		echo "
		Характеристика: $result[option1]
	";}
;
									?>
									</h4> <INPUT type="text" name="option1" list="reg2" ></td>

									<td bgcolor="#f7f7f7"><h4>
									<?php
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
//Подготовка запроса на выборку
//удаление прабелов

    $query="SELECT `option2`
            FROM `ts` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
	while ($result = mysql_fetch_array($query_res)){
		echo "
		Характеристика: $result[option2]
	";}
;
									?> </h4> <INPUT type="text" name="option2" list="reg2" ></td>

									<td  bgcolor="#f7f7f7"> <h4>
									<?php
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
//Подготовка запроса на выборку
//удаление прабелов

    $query="SELECT `option3`
            FROM `ts` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
	while ($result = mysql_fetch_array($query_res)){
		echo "
		Характеристика: $result[option3]
	";}
;
									?></h4> <INPUT type="text" name="option3" list="reg2" ></td>

									</tr>
									<tr>
									<td  bgcolor="#f7f7f7"> <h4>
									<?php
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
//Подготовка запроса на выборку
//удаление прабелов

    $query="SELECT `option4`
            FROM `ts` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
	while ($result = mysql_fetch_array($query_res)){
		echo "
		Характеристика: $result[option4]
	";}
;
									?></h4> <INPUT type="text" name="option4" list="reg2" ></td>

									<td  bgcolor="#f7f7f7"><h4>
									<?php
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
//Подготовка запроса на выборку
//удаление прабелов

    $query="SELECT `option5`
            FROM `ts` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
	while ($result = mysql_fetch_array($query_res)){
		echo "
		Характеристика: $result[option5]
	";}
;
									?> </h4> <INPUT type="text" name="option5" list="reg2"></td>

									<td  bgcolor="#f7f7f7"><h4>
									<?php
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
//Подготовка запроса на выборку
//удаление прабелов

    $query="SELECT `option6`
            FROM `ts` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
	while ($result = mysql_fetch_array($query_res)){
		echo "
		Характеристика: $result[option6]
	";}
;
									?> </h4> <INPUT type="text" name="option6" list="reg2"></td>
									</tr>
<tr>
									<td  bgcolor="#f7f7f7"><h4>
									<?php
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
//Подготовка запроса на выборку
//удаление прабелов

    $query="SELECT `option7`
            FROM `ts` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
	while ($result = mysql_fetch_array($query_res)){
		echo "
		Характеристика: $result[option7]
	";}
;
									?> </h4> <INPUT type="text" name="option7" list="reg2"></td>

									<td bgcolor="#f7f7f7"><h4>
									<?php
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
//Подготовка запроса на выборку
//удаление прабелов

    $query="SELECT `option8`
            FROM `ts` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
	while ($result = mysql_fetch_array($query_res)){
		echo "
		Характеристика: $result[option8]
	";}
;
									?> </h4> <INPUT type="text" name="option8" list="reg2"></td>

									<td  bgcolor="#f7f7f7"><h4>
									<?php
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
//Подготовка запроса на выборку
//удаление прабелов

    $query="SELECT `option9`
            FROM `ts` WHERE `id` = '".$_POST['name']."'";
    $query_res=mysql_query($query);
	while ($result = mysql_fetch_array($query_res)){
		echo "
		Характеристика: $result[option9]
	";}
;
									?> </h4> <INPUT type="text" name="option9" list="reg2"></td>
									</tr>
									<td colspan=5 bgcolor="#f7f7f7"> <h4>Статус: </h4> <INPUT type="text" name="status" list="reg55" ></td>
									</tr>
<datalist id="reg55">									
<?php

$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting_");
echo $fname;
//Подготовка запроса на выборку
//удаление прабелов

function names55()
  {

    $query="SELECT `id`, `status`
            FROM `status_maintenance`";
    $query_res=mysql_query($query);
    $names = array();
	
    while($row = mysql_fetch_assoc($query_res))
      {
          $names55[] = $row;
      }
    return $names55;
  }
$names55 = names55();
echo "<select status='status', id='id'>";
foreach($names55 as $item)
    { 
      echo "<option value=' ".$item['status']." '>".$item['id']."</option>";
    } 
       
echo "</select>";

?>
</select>													
<datalist id="reg">
<?php
//Связь с формой
$fid=$_POST['id'];
$fname=$_POST['name'];

//Подключение к серверу MySQL
$db = mysql_connect("localhost", "Frizzes", "Frizzes14");

//Выбор базы данных
$er = mysql_select_db("accounting");

//Подготовка запроса на выборку
//удаление прабелов

function names2()
  {
    $query="SELECT `id`, `name`
            FROM `ts` WHERE `name` = '%$fname%'";
    $query_res=mysql_query($query);
    $names = array();
    while($row = mysql_fetch_assoc($query_res))
      {
          $names2[] = $row;
      }
    return $names2;
  }
$names2 = names2();
echo "<select name='name', id='id'>";
foreach($names2 as $item)
    { 
      echo "<option value=' ".$item['name']." '>".$item['id']."</option>";
    } 
       
echo "</select>";

?>
</select>	

</table></td></tr></table>
<br></br>
							</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="LogonBtn" value="Отправить" onClick = "FormControl()" class="special" /></a>
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
