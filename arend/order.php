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
 <div class="wrapper">
 	<?php require('../components/header.php'); ?>
 	<main>

 		<div class="tort__container _container">
 			<div class="tort__title">Заказ кондитерского изделия</div>
 			<div class="tort__body">
 				<form action="../arend/bill.php" class="tort__form form-tort" method="GET" id="form" enctype="multipart/form-data">
 					<div class="cont-flex">
 						<div class="form-tort__testo testo cont-flex__item">
 							<div class="testo__title">Тесто</div>
 							<div class="testo__radio section-radio">
 								<div class="section-radio__item">
 									<input type="radio" class="input-radio" name="product[testo]" value="Бисквит" checked> Бисквит
 								</div>
 								<div class="section-radio__item">
 									<input type="radio" class="input-radio" name="product[testo]" value="Песочное"> Песочное
 								</div>
 								<div class="section-radio__item">
 									<input type="radio" class="input-radio" name="product[testo]" value="Безе"> Безе
 								</div>
 							</div>
 						</div>
 						<div class="form-tort__cream-decoration cont-flex__item">
 							<div class="cream">
 								<div class="cream__title">Крем</div>
 								<div class="cream__radio section-radio">
 									<div class="section-radio__item">
 										<input type="radio" class="input-radio" name="product[cream]" value="Маслянный" checked> Маслянный
 									</div>
 									<div class="section-radio__item">
 										<input type="radio" class="input-radio" name="product[cream]" value="Заварной"> Заварной
 									</div>
 									<div class="section-radio__item">
 										<input type="radio" class="input-radio" name="product[cream]" value="Фруктовый"> Фруктовый
 									</div>
 								</div>
 							</div>
 							<div class="decoration">
 								<div class="decoration__title">Украшения</div>
 								<div class="decoration__checkbox section-checkbox">
 									<div class="section-checkbox__item">
 										<input type="checkbox" class="input-checkbox" name="decoration[]" value="Глазурь"> Глазурь
 									</div>
 									<div class="section-checkbox__item">
 										<input type="checkbox" class="input-checkbox" name="decoration[]" value="Фигурки"> Фигурки
 									</div>
 								</div>
 							</div>
 						</div>
 						<div class="form-tort__type type cont-flex__item">
 							<div class="type__title">Вид изделия</div>
 							<select class="type__select section-select" name="product[type]">
 								<optgroup label="Торты">
 									<option class="section-select__item"  value="Торт круглый"> Круглый</option>
 									<option class="section-select__item"  value="Торт квадратный"> Квадратный</option>
 								</optgroup>
 								<optgroup label="Пирожные">
 									<option class="section-select__item"  value="Пирожные отдельно"> Отдельные</option>
 									<option class="section-select__item"  value="Пирожные в формочке"> В формочке</option>
 								</optgroup>
 								<optgroup label="Десерты">
 									<option class="section-select__item"  value="Десерты в бокале"> В бокале</option>
 									<option class="section-select__item"  value="Десерты в баночке"> В баночке</option>
 								</optgroup>
 							</select>
 						</div>
 					</div>
 					<div class="form-tort__data data">
 						<div class="data__title">Ваши данные</div>
 						<div class="data__input section-data">
 							<div class="section-data__item">
 								Имя
 								<input type="text" name="date[name]" class="input-text" placeholder="Иван" pattern="^[A-Za-zА-Яа-яЁё]+$" required>
 							</div>
 							<div class="section-data__item">
 								Адрес
 								<input type="text" name="date[address]" class="input-text" placeholder="ул. Мира д.220 кв.1" required>
 							</div>
 							<div class="section-data__item">
 								Телефон
 								<input type="tel" name="date[phone]" class="input-text" placeholder="7 900 123 45 67" pattern="7\s[0-9]{3}\s[0-9]{3}\s[0-9]{2}\s[0-9]{2}" required>
 							</div>
 							<div class="section-data__item">
 								Дата доставки
 								<input type="date" class="input-text" name="date[date-dili]" required>
 							</div>
 							
 							<div class="section-data__item">
 								Время доставки
 								<select name="date[time]" >
 									<option value="10:00 - 15:00">10:00 - 15:00</option>
 									<option value="15:00 - 19:00">15:00 - 19:00</option>
 									<option value="19:00 - 23:00">19:00 - 23:00</option>
 								</select>
 							</div>
 							
 							<div class="section-data__item">
 								Файл с базовыми ценами
 								<input type="file" accept="text/plain" class="txt-file" name="price">
 							</div>
 							
 							<div class="section-button__item ">
 								<input type="submit" value="Отправить" class="button" name="submit"></input>
 							</div>
 						</div>
 					</div>
 				</form>
 			</div>
 		</div>
 	</main>

 	<?php require('../components/footer.php'); ?>
 </div>
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 	<script src="../js/script.js"></script>
 	<script>
 		var today = new Date().toISOString().split('T')[0];
 		document.getElementsByName("date[date-dili]")[0].setAttribute('min', today);

		 document.querySelector('.txt-file').addEventListener('change', (event) => {
			$("#form").attr("method", "POST");
		});
 	</script>
 </body>

 </html>