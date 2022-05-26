<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, instal-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title>TheMasha</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/calc.css" />
</head>

<body>
  <div class="wrapper">
    <?php
    require('components/header.php');
    ?>
    <main>     
      <div class="calk__container _container">
        <div class="calk__title">Калькулятор</div>
        <div class="calk__body body-calk">
          <div class="body-calck__input body-calk-collumn">
            <form action="" method="GET" class="body-calck__form calk-form">
              <div class="calk-form__input-fields input-field">
                <input type="number" class="input-field__left" name="number1">
                <input type="number" class="input-field__right" name="number2">
              </div>
              <div class="calk-form__buttton-fields">
                <input class="buttton-field" value="+" type="submit" name="plus"></input>
                <input class="buttton-field" value="-" type="submit" name="minus"></input>
                <input class="buttton-field" value="*" type="submit" name="multyple"></input>
                <input class="buttton-field" value="/" type="submit" name="split"></input>
              </div>
            </form>
          </div>
          <div class="body-calck__output body-calk-collumn">
            <?php
            if (isset($_GET['plus']) or isset($_GET['minus']) or isset($_GET['multyple']) or isset($_GET['split'])) {
              if ($_GET['number1'] != '' and $_GET['number2'] != '') {
                // инициализация
                $number1 = $_GET['number1'];
                $number2 = $_GET['number2'];
                if (isset($_GET['plus'])) {
                  echo '<div class="calk-result">Операция сложения<br>'
                    . "$number1" . ' + ' . "$number2" . ' = ' . ($number1 + $number2) . '</div>';
                } else  if (isset($_GET['minus'])) {
                  echo '<div class="calk-result">Операция вычетания<br>'
                    . "$number1" . ' - ' . "$number2" . ' = ' . ($number1 - $number2) . '</div>';
                } else  if (isset($_GET['split'])) {
                  echo '<div class="calk-result">Операция деления<br>'
                    . "$number1" . ' / ' . "$number2" . ' = ' . ($number1 / $number2) . '</div>';
                } else if (isset($_GET['multyple'])) {
                  echo '<div class="calk-result">Операция умножения<br>'
                    . "$number1" . ' * ' . "$number2" . ' = ' . ($number1 * $number2) . '</div>';
                }
              } else echo '<div class="calk-result">не все значения введены</div>';
            }
            ?>
          </div>
        </div>
      </div>
    </main>
    <?php
    require('components/footer.php');
    ?>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>