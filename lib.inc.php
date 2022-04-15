<?php

function drawTable( $cols , $rows , $color)
{
  echo "<table border='1' width='200' background-color = $color>";
  for ($tr=1 ; $tr <= $rows ; $tr++){
        $style = " style='background-color:$color'";
        echo '<tr'.$style.' >';
        for($td=1 ; $td <= $cols ; $td++){

          echo '<td'.$style.'>'.$tr*$td.'</td>';
        }
        echo '</tr>';
      }
  echo "</table>";
}


function drawMenu($vertical = true)
    {
      if($vertical != true){
        echo "<ul class = 'hr'>
                <li><a href='index.php'>Домой</a>
                </li>
                <li><a href='about.php'>О нас</a>
                </li>
                <li><a href='contact.php'>Контакты</a>
                </li>
                <li><a href='table.php'>Таблица умножения</a>
                </li>
                <li><a href='calc.php'>Калькулятор</a>
                </li>
              </ul>";
      }
      else{
        echo "<ul>
                <li><a href='index.php'>Домой</a>
                </li>
                <li><a href='about.php'>О нас</a>
                </li>
                <li><a href='contact.php'>Контакты</a>
                </li>
                <li><a href='table.php'>Таблица умножения</a>
                </li>
                <li><a href='calc.php'>Калькулятор</a>
                </li>
              </ul>";
      }
    }