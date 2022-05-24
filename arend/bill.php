 <!DOCTYPE html>
 <html lang="ru">

 <head>
 	<meta charset="UTF-8" />
 	<meta name="viewport" content="width=device-width, instal-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 	<title>TheMasha</title>
 	<link rel="stylesheet" href="../css/style.css" />
 	<link rel="stylesheet" href="../css/order.css" />
 </head>

 <body>
 	<?php require('../components/header.php'); ?>

 	<main>
	 <div class="bill__container _container">
	  <div class="bill__title">Заказ кондитерского изделия</div>
			<?php 
			//цены по умолчанию если в документе их нет
			$testo = 600;
			$cream = 200;
			$dilivery = 100;

			$myfile = fopen("../txt/price.txt", "r") or die("Unable to open file!");
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

			$product = $_GET['product'];
			$date = $_GET['date'];
			$decor = $_GET['decoration'];

			$description_type = "";
			$description_testo = "";
			$description_cream = "";
			switch(strtolower($product['type'])){
				case "торт круглый":
					$description_type = "Самый круглый!";
					 $margin_type = $tort; $result +=$margin_type;
					 break;
				case "торт квадратный":
					$description_type = "идеально ровные углы!";
				    $margin_type = $tort; $result +=$margin_type;
					 break;
				case "пирожные в формочке":
					$description_type = "самые классные формочки!";
					 $margin_type = $cupcakes; $result +=$margin_type;
					 break;
				case "пирожные отдельные":
					$description_type = "лычшие в мире!";
					 $margin_type = $cupcakes; $result +=$margin_type;
					 break;
				case "десерты в бокале":
					$description_type = "очень вкусные!";
					 $margin_type = $cupcakes; $result +=$margin_type;
					 break;
				case "десерты в баночке":
					$description_type = "очень вкусные!";
					 $margin_type = $cupcakes; $result +=$margin_type;
					 break;
			}

			switch(strtolower($product['testo'])){
				case "песочное":
					$description_testo = "невероятно расспчатое, просто тает во рту";
					 $margin_testo = $shortbread; $result +=$margin_testo;
					 break;
				case "бисквит":
					$description_testo = "очень пышный и мягкий";
					 $margin_testo = $biscuit; $result +=$margin_testo;
					 break;
				case "безе":
					$description_testo = "используются самые лучшие белки";
					 $margin_testo = $meringue; $result +=$margin_testo;
					 break;
			}
			switch(strtolower($product['cream'])){
				case "маслянный":
					$description_cream = "сделано из лучшего масла";
					 $margin_cream = $cream; $result +=$margin_cream;
					 break;
				case "заварной":
					$description_testo = "на основе натуральных сливок";
					$margin_cream = $cream; $result +=$margin_cream;
					 break;
				case "фруктовый":
					$description_testo = "подобрано идеальное сочетание фруктов";
					$margin_cream = $cream; $result +=$margin_cream;
					 break;
			}
			?>
		<div class="bill__body body-bill">
			<div class="body-bill__baze-tort baze">Базовая цена теста <?php echo $testo ?> рублей</div>
			<div class="body-bill__baze-cream baze">Базовая цена крема <?php echo $cream ?> рублей</div>
			<table class="body-bill__table bill-table">
				<tr>
					<td>Вид изделия</td>
					<td><?php  echo  $product['type']  ?></td>
					<td>
						<?php  echo  var_dump($description_type)  ?><br>
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
					 	if (count($decor)==0){
							 echo
							"<td>-</td>
							<td> 0 рублей</td>";
						 }
					?>
					<!-- <td></td>
					<td></td> -->
				</tr>
				<tr>
					<td>Имя заказчика</td>
					<td><?php echo $date['name'] ?></td>
				</tr>
				<tr>
					<td>Адрес</td>
					<td><?php echo $date['address'] ?></td>
				</tr>
				<tr>
					<td>Телефон</td>
					<td><?php $date['phone'] ?></td>
				</tr>
				<tr>
					<td>Дата доставки</td>
					<td><?php echo $date['date-dili'] ?></td>
				</tr>
				<tr>
					<td>Время доставки</td>
					<td><?php echo $date['time'] ?></td>
				</tr>
				<tr>
					<td>Итого</td>
					<td></td>
				</tr>
			</table>
		</div>
	 </div>
 	</main>

 	<?php require('../components/footer.php'); ?>
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 	<script src="../js/script.js"></script>
 </body>

 </html>