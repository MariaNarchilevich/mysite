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

 		<div class="tort__container _container">
 			<h1 class="tort__title">Заказ кондитерского изделия</h1>
 			<div class="tort__body">
 				<form action="" class="tort__form form-tort">
 					<div class="cont-flex">
 						<div class="form-tort__testo testo cont-flex__item">
 							<div class="testo__title">Тесто</div>
 							<div class="testo__radio section-radio">
 								<div class="section-radio__item">
 									<input type="radio" class="input-radio" name="tort" value="Бисквит" checked> Бисквит
 								</div>
 								<div class="section-radio__item">
 									<input type="radio" class="input-radio" name="tort" value="Песочный"> Песочный
 								</div>
 								<div class="section-radio__item">
 									<input type="radio" class="input-radio" name="tort" value="Безе"> Безе
 								</div>
 							</div>
 						</div>
 						<div class="form-tort__cream-decoration cont-flex__item">
 							<div class="cream">
 								<div class="cream__title">Крем</div>
 								<div class="cream__radio section-radio">
 									<div class="section-radio__item">
 										<input type="radio" class="input-radio" name="cream" value="Маслянный" checked> Маслянный
 									</div>
 									<div class="section-radio__item">
 										<input type="radio" class="input-radio" name="cream" value="Заварной"> Заварной
 									</div>
 									<div class="section-radio__item">
 										<input type="radio" class="input-radio" name="cream" value="Фруктовый"> Фруктовый
 									</div>
 								</div>
 							</div>
 							<div class="decoration">
 								<div class="decoration__title">Украшения</div>
 								<div class="decoration__checkbox section-checkbox">
 									<div class="section-checkbox__item">
 										<input type="checkbox" class="input-checkbox" name="decoration1" value="Маслянный"> Глазурь
 									</div>
 									<div class="section-checkbox__item">
 										<input type="checkbox" class="input-checkbox" name="decoration2" value="Заварной"> Фигурки
 									</div>
 								</div>
 							</div>
 						</div>
 						<div class="form-tort__type type cont-flex__item">
 							<div class="type__title">Вид изделия</div>
 							<select class="type__select section-select" name="tort-type">
 								<optgroup label="Торты">
 									<option class="section-select__item" value="t1"> Круглые</option>
 									<option class="section-select__item" value="t2"> Квадратные</option>
 								</optgroup>
 								<optgroup label="Пирожные">
 									<option class="section-select__item" value="p1"> Отдельные</option>
 									<option class="section-select__item" value="p2"> В формочке</option>
 								</optgroup>
 								<optgroup label="Десерты">
 									<option class="section-select__item" value="d1"> В бокале</option>
 									<option class="section-select__item" value="d2"> В баночке</option>
 								</optgroup>
 							</select>
 						</div>
 					</div>
 					<div class="form-tort__data data">
 						<div class="data__title">Ваши данные</div>
 						<div class="data__input section-data">
 							<div class="section-data__item">
 								Имя
 								<input type="text" class="input-text" required>
 							</div>
 							<div class="section-data__item">
 								Адрес
 								<input type="text" class="input-text" required>
 							</div>
 							<div class="section-data__item">
 								Телефон
 								<input type="tel" class="input-text" placeholder="+7 (900) 123-45-67" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required>
 							</div>
 							<div class="section-data__item">
 								Дата доставки
 								<input type="date" class="input-text" required>
 							</div>
 							<!-- другое поле -->
 							<div class="section-data__item">
 								Время доставки
 								<input type="text" class="input-text" required>
 							</div>
 							<!-- другое поле -->
 							<div class="section-data__item">
 								Файль с базовыми ценами
 								<input type="text" class="input-text" required>
 							</div>
 							<!-- доработать кнопку классы -->
 							<div class="section-button__item ">
 								<input type="submit" value="Отправить"></input>
 							</div>
 						</div>
 					</div>
 				</form>
 			</div>
 		</div>
 	</main>

 	<?php require('../components/footer.php'); ?>
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 	<script src="../js/script.js"></script>
 </body>

 </html>