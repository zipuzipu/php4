<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$cols = abs((int) $_POST['cols']);
$rows = abs((int) $_POST['rows']);
$color = trim(strip_tags($_POST['color']));
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : 'yellow';
?>
    <!-- Область основного контента -->
    <form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='color' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <?php
    include 'inc/lib.inc.php';
    $Cols=$_POST['cols'];
    $Rows=$_POST['rows'];
    $Color=$_POST['color'];

    drawTable($Cols , $Rows, $Color);
     ?>


    <!-- Таблица -->
    <!-- Область основного контента -->