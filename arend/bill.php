 <!DOCTYPE html>
 <html lang="ru">

 <head>
 	<meta charset="UTF-8" />
 	<meta name="viewport" content="width=device-width, instal-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 	<title>TheMasha</title>
 	<link rel="stylesheet" href="../css/style.css" />
 	<link rel="stylesheet" href="../css/bill.css" />
 </head>

 <body>
 <div class="wrapper">
 	<?php require('../components/header.php'); ?>

 	<main>
	 <div class="bill__container _container">
	  
			<?php 
			//цены по умолчанию если в документе их нет
			$testo = 600;
			$cream = 200;
			$dilivery = 100;

			if (isset($_GET)){
			$myfile = fopen("../txt/price1.txt", "r") or die("Unable to open file!");

			$product = $_GET['product']; 
			$date = $_GET['date'];
			$decor = $_GET['decoration'];
			}
			if (isset($_POST)){
				$current_path = $_FILES['price']['tmp_name'];
				$filename = $_FILES['price']['name'];
				$new_path = '../txt' . '/' . $filename;

				move_uploaded_file($current_path, $new_path);

				$myfile = fopen($new_path, "r") or die("Unable to open file!");
				
				$product = $_POST['product']; 
				$date = $_POST['date'];
				$decor = $_POST['decoration'];
			}

			$arr = []; $k=0;
			while(!feof($myfile)) {
				$arr[$k] = fgets($myfile) ;
				$k++;
			}
			$newa = [];
			for ($i=0; $i < count($arr); $i++)
			{
				$newa[$i] = explode('-', $arr[$i]);
				if (count($newa[$i], COUNT_RECURSIVE) != 2 )
				{
					array_slice($newa, $i, 1);
				}
			}
			fclose($myfile);

			for ($i=0; $i < count($newa); $i++)
			{
				if (strtolower($newa[$i][0]) == "стоимость теста") {$testo = (int)$newa[$i][1];}
				else  if (strtolower($newa[$i][0]) == "стоимость крема") {$cream = (int)$newa[$i][1];}
				else  if (strtolower($newa[$i][0]) == "доставка") {$dilivery = (int)$newa[$i][1];}
			}

			//  наценки
			$tort = 100;
			$cupcakes = 50;

			$biscuit = 30;
			$meringue = 40;
			$shortbread = 50;

			$dilivery_night = $dilivery*2;
			$dilivery_evening = $dilivery + $dilivery+0.2;

			$glaze = 30;
			$figurines = 80;

			$result = $testo + $cream + $dilivery;

			$description_type = "";
			$description_testo = "";
			$description_cream = "";

			switch(mb_strtolower($product['type'])){
				case "торт круглый":
					$description_type = "Самый круглый!";
					 $margin_type = $tort; $result +=$margin_type;
					 break;
				case "торт квадратный":
					$description_type = "Идеально ровные углы!";
				    $margin_type = $tort; $result +=$margin_type;
					 break;
				case "пирожные в формочке":
					$description_type = "Самые классные формочки!";
					 $margin_type = $cupcakes; $result +=$margin_type;
					 break;
				case "пирожные отдельные":
					$description_type = "Лучшие в мире!";
					 $margin_type = $cupcakes; $result +=$margin_type;
					 break;
				case "десерты в бокале":
					$description_type = "Очень вкусные!";
					 $margin_type = $cupcakes; $result +=$margin_type;
					 break;
				case "десерты в баночке":
					$description_type = "Очень вкусные!";
					 $margin_type = $cupcakes; $result +=$margin_type;
					 break;
			}

			switch(mb_strtolower($product['testo'])){
				case "песочное":
					$description_testo = "Невероятно расспчатое, просто тает во рту";
					 $margin_testo = $shortbread; $result +=$margin_testo;
					 break;
				case "бисквит":
					$description_testo = "Очень пышный и мягкий";
					 $margin_testo = $biscuit; $result +=$margin_testo;
					 break;
				case "безе":
					$description_testo = "Используются самые лучшие белки";
					 $margin_testo = $meringue; $result +=$margin_testo;
					 break;
			}
			switch(mb_strtolower($product['cream'])){
				case "маслянный":
					$description_cream = "Сделан из лучшего масла";
					 $margin_cream = $cream; $result +=$margin_cream;
					 break;
				case "заварной":
					$description_testo = "На основе натуральных сливок";
					$margin_cream = $cream; $result +=$margin_cream;
					 break;
				case "фруктовый":
					$description_testo = "Подобрано идеальное сочетание фруктов";
					$margin_cream = $cream; $result +=$margin_cream;
					 break;
			}
			?>
		<div class="bill__title">Заказ кондитерского изделия</div>
		<div class="bill__body body-bill">
			<div class="body-bill__baze-tort baze">Базовая цена теста <?php echo $testo ?> рублей</div>
			<div class="body-bill__baze-cream baze">Базовая цена крема <?php echo $cream ?> рублей</div>
			<table class="body-bill__table bill-table">
				<tr>
					<td>Вид изделия</td>
					<td><?php  echo  $product['type']  ?></td>
					<td>
						<?php  echo  $description_type  ?><br>
						Наценка: <?php  echo  $margin_type  ?> рублей
					</td>
				</tr>
				<tr>
					<td>Тесто</td>
					<td><?php  echo  $product['testo']  ?></td>
					<td>
						<?php  echo  $description_testo  ?><br>
						Наценка: <?php  echo  $margin_testo  ?> рублей
					</td>
				</tr>
				<tr>
					<td>Крем</td>
					<td><?php  echo  $product['cream']  ?></td>
					<td>
						<?php  echo  $description_cream  ?><br>
						Наценка: <?php  echo  $margin_cream  ?> рублей
					</td>
				</tr>
				<tr>
					<td>Украшения</td>
					<?php 
					switch(count($decor)) {
						case 0:
							echo
							"<td>-</td>
							<td> 0 рублей</td>";
							break;
						case 1:
							echo
						  "<td>$decor[0]</td>";
						  if (mb_strtolower($decor[0]) == "глазурь")
						  {
							$result += $glaze;
							echo "<td> $glaze рублей</td>";
						  }
						  else  {
							$result += $figurines;
							echo "<td> $figurines рублей</td>";
						  }
						  break;
						case 2:
							echo
						  "<td>$decor[0]<br> $decor[1]</td>";
							echo "<td> $glaze рублей <br> $figurines рублей</td>";
							$result += $figurines;
							$result += $glaze;					  
					}?>

				</tr>
				<tr>
					<td>Имя заказчика</td>
					<td colspan="2"><?php echo $date['name'] ?></td>
				</tr>
				<tr>
					<td>Адрес</td>
					<td colspan="2"><?php echo $date['address'] ?></td>
				</tr>
				<tr>
					<td>Телефон</td>
					<td colspan="2"><?php echo $date['phone'] ?></td>
				</tr>
				<tr>
					<td>Дата доставки</td>
					<td colspan="2"><?php echo $date['date-dili'] ?></td>
				</tr>
				<tr>
					<td>Время доставки</td>
					<td colspan="2"><?php echo $date['time'] ?></td>
				</tr>
				<tr>
					<td>Итого</td>
					<td colspan="2"><?php echo $result ?></td>
				</tr>
			</table>
		</div>
	 </div>
 	</main>

 	<?php require('../components/footer.php'); ?>
 </div>
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 	<script src="../js/script.js"></script>
 </body>

 </html>