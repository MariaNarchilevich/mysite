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
		 <?php 
		 $myfile = fopen("../txt/price.txt", "r") or die("Unable to open file!");
		 echo fread($myfile,filesize("../txt/price.txt"));
		 fclose($myfile);
		//цены по умолчанию
		$testo = 600;
		$cream = 200;
		$dilivery = 100;

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
		 ?>


 	</main>

 	<?php require('../components/footer.php'); ?>
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 	<script src="../js/script.js"></script>
 </body>

 </html>