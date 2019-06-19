<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Автоматизированное рабочее место</title>
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
						<li><a href="service.php"class="button special">Сервис служб</a></li>
						<li><a href="auth.php" class="button special">Личный кабинет</a></li>
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
									

<form method="post" action="itog2.php" name="ind" accept-charset="utf8_general_ci">
									</table>
									</td><td bgcolor="#ffffff"></td><td>
									<table style="background-color: #e9edf">
									<caption><h2>Автоматизированное рабочее место</h2><p><h4>* поля, обязательные для заполнения<h4></p></caption>

									<tr>
									<td   bgcolor="#f7f7f7"> <h4>Наименование: </h4> <INPUT type="text" name="workstation" list="" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 1: </h4> <INPUT type="text" name="component1" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 2: </h4> <INPUT type="text" name="component2" list="reg1" ></td>
									</tr>
									<tr>
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 3: </h4> <INPUT type="text" name="component3" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 4: </h4> <INPUT type="text" name="component4" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 5: </h4> <INPUT type="text" name="component5" list="reg1" ></td>
									</tr>									<tr>
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 6: </h4> <INPUT type="text" name="component6" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 7: </h4> <INPUT type="text" name="component7" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 8: </h4> <INPUT type="text" name="component8" list="reg1" ></td>
									</tr>									<tr>
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 9: </h4> <INPUT type="text" name="component9" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 10: </h4> <INPUT type="text" name="component10" list="reg1" ></td>

									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 11: </h4> <INPUT type="text" name="component11" list="reg1" ></td>
									</tr>									<tr>
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 12: </h4> <INPUT type="text" name="component12" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 13: </h4> <INPUT type="text" name="component13" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 14: </h4> <INPUT type="text" name="component14" list="reg1" ></td>
									</tr>									<tr>
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 15: </h4> <INPUT type="text" name="component15" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 16: </h4> <INPUT type="text" name="component16" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 17: </h4> <INPUT type="text" name="component17" list="reg1" ></td>
									</tr>									<tr>
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 18: </h4> <INPUT type="text" name="component18" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 19: </h4> <INPUT type="text" name="component19" list="reg1" ></td>
									
									<td   bgcolor="#f7f7f7"> <h4>Техническое средство 20: </h4> <INPUT type="text" name="component20" list="reg1" ></td>
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
            FROM `technical_mean` WHERE `status`='в работоспособном состоянии'";
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
									<td  bgcolor="#f7f7f7"><h4>Местоположение: </h4> <INPUT type="text" name="location" list="reg2" ></td>
<datalist id="reg2">									
<?php
//Связь с формой
$fid=$_POST['id_ch'];
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

function names2()
  {

    $query="SELECT `id`, `branch`, `address`
            FROM `location`";
    $query_res=mysql_query($query);
    $names = array();
	
    while($row = mysql_fetch_assoc($query_res))
      {
          $names2[] = $row;
      }
    return $names2;
  }
$names2 = names2();
echo "<select branch='branch`', address='address'>";
foreach($names2 as $item)
    { 
      echo "<option value=' ".$item['branch']." '>".$item['address']."</option>";
    } 
       
echo "</select>";

?>
</select>	
									<td  bgcolor="#f7f7f7"> <h4>Ответственное лицо: *</h4> <INPUT type="text" name="user" list="reg3" required></td>
<datalist id="reg3">									
<?php
//Связь с формой
$fid=$_POST['id_ch'];
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

function names3()
  {

    $query="SELECT `id`, `full_name`, `profession`
            FROM `responsible_for_commissioning`";
    $query_res=mysql_query($query);
    $names = array();
	
    while($row = mysql_fetch_assoc($query_res))
      {
          $names3[] = $row;
      }
    return $names3;
  }
$names3 = names3();
echo "<select id='id`', full_name='full_name'>";
foreach($names3 as $item)
    { 
      echo "<option value=' ".$item['full_name']." '>".$item['id']."</option>";
    } 
       
echo "</select>";

?>
</select>	
									</tr>
									<tr bgcolor="#f7f7f7">
									<td ><h4>Дата выпуска *: </h4><INPUT type="date" name="data_release" list="" required></td><td><h4>Дата вывода из эксплуатации: *</h4><INPUT type="date" name="data_of_destruction" class="tcal" value="" required list="4">
                                    </tr>



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
