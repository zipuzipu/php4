
    <!-- Область основного контента -->
    <form action='' method="POST">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='number' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='number' />
      <br />
      <br />
      <input type='submit' value='Считать'>
      <?php

      function calculate($n1,$n2,$operator)
      {
        echo ("<br><br><br>");
        switch ($operator) {
          case '+':
             echo $n1 + $n2;
            break;


          case '-':
            echo $n1 - $n2;
            break;


          case '/':
            if($n2 == 0){
              echo ("Нельзя делить на 0, попробуйте снова ");
            }
            else {$c = $n1 / $n2;
            echo $c;}
            break;


          case '*':
            $c = $n1 * $n2;
            echo $c;
            break;

          default:
              echo ("Наш калькулятор использует лишь 4 оператора : +, -, *, /");
            break;
        }
      }


        $num1 =$_POST['num1'];
        $num2 =$_POST['num2'];
        $operator =$_POST['operator'];

        calculate($num1,$num2,$operator);






      ?>
    </form>
    <!-- Область основного контента -->