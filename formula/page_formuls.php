<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, instal-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title>formul</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/func.css" />
</head>

<body>
  <?php
  require('../components/header.php');
  ?>
  <main>
    <div class="func__container _container">
      <div class="func__body">
        <div class="func__title">
          <h1 class="title-func">Вычисление функции</h1>
          <img src="../img/01.png" alt="func">
        </div>
        <div class="func__form form-func">
          <div class="form-func__title">Передаем данные</div>
          <form action="../formula/page_formuls2.php" method="GET" class="form-func__body">
            <div class="item-form">
              <div class="item-form__txt">Введите число a:</div>
              <input class="item-form__input" type="number" name="valueA"></input>
            </div>
            <div class="item-form">
              <div class="item-form__txt">Введите число b:</div>
              <input class="item-form__input" type="number" name="valueB"></input>
            </div>
            <div class="item-form">
              <div class="item-form__txt">Введите число c:</div>
              <input class="item-form__input" type="number" name="valueC"></input>
            </div>
            <input type="submit" class="form-func__submit" name="submit" value="Отправить"></input>
          </form>
        </div>
      </div>
    </div>
  </main>
  <?php
  require('../components/footer.php');
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>