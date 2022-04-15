<?php
  include 'inc/lib.inc.php';
  $navMenu = [
        ['link' => 'Домой', 'href' => 'index.php'],
        ['link' => 'О нас', 'href' => 'about.php'],
        ['link' => 'Контакты', 'href' => 'contact.php'],
        ['link' => 'Таблица умножения', 'href' => 'table.php'],
        ['link' => 'Калькулятор', 'href' => 'calc.php']
      ];

// Инициализация заголовков страницы
$title = 'Сайт нашей школы';
$header = "Добро пожаловать, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'])));
switch($id){
case 'about':
$title = 'О сайте';
$header = 'О нашем сайте';
break;
case 'contact':
$title = 'Контакты';
$header = 'Обратная связь';
break;
case 'table':
$title = 'Таблица умножения';
$header = 'Таблица умножения';
break;
case 'calc':
$title = 'Он-лайн калькулятор';
$header = 'Калькулятор';
break;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <style>
    ul.hr li{
      display: inline;
      margin-right: 5 px;
      padding: 3px;
    }

  </style>
  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php include 'inc/top.inc.php'; ?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <?php echo $header?>
    <!-- Заголовок -->
    <!-- Область основного контента -->
<?php
switch($id){
case 'about':
include 'about.php';
break;
case 'contact':
include 'contact.php';
break;
case 'table':
include 'table.php';
break;
case 'calc':
include 'calc.php';
break;
default:
include 'inc/index.inc.php';
}
?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
   <?php include 'inc/menu.inc.php'; ?>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
  <?php include 'inc/bottom.inc.php'; ?>
    <!-- Нижняя часть страницы -->
  </div>

</body>
</html>