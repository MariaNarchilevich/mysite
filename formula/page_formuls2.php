<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, instal-scale=1.0, maximum-scale=1.0, user-scalable=0" />
   <title>formul</title>
   <link rel="stylesheet" href="../css/style.css" />
   <link rel="stylesheet" href="../css/page_formuls2.css" />
</head>

<body>
   <?php
   require('../components/header.php');
   ?>
   <main>
      <?php
      if ($_GET['valueA'] != '' and $_GET['valueB'] != '' and $_GET['valueC'] != '') {
         $a = (float)($_GET['valueA']);
         $b = (float)($_GET['valueB']);
         $c = (float)($_GET['valueC']);
         $x = NAN;
         if ($c == 0) {
            $str = "на ноль делить нельзя";
         } else if ($b < 0) {
            $str = "число под корнем не может быть отрицаетльным";
         } else {
            $x = (pow(($a + sqrt($b)), 2)) / (pow($c, 3));
            $xFormat = round($x,3);
            $str = "<table>
               <tr>
               <th>a</th>
               <th>b</th>
               <th>c</th>
               <th>x</th>
               </tr> 
               <tr>
               <td>$a</td>
               <td>$b</td>
               <td>$c</td>
               <td>$xFormat</td>
               </tr>     
            </table>";
         }
      } else {
         $str = "введены не все значения";
      }
      ?>
      <div class="function__container _container">
         <div class="function__title"> Принимаем данные </div>
         <div class="function__body">
            <div class="function__items">
               <div class="function__item">a = <?php echo $a ?></div>
               <div class="function__item">b = <?php echo $b ?></div>
               <div class="function__item">c = <?php echo $c ?></div>
               <div class="function__item">x = <?php echo $x ?></div>
               <div class="function__item">форматированное x = <?php echo $xFormat ?></div>
               <div class="function__item"><?php echo $str ?></div>
            </div>
         </div>
      </div>
   </main>
   <?php
   require('../components/footer.php');
   ?>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="../js/script.js"></script>
</body>

</html>