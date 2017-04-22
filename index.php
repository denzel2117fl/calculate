<?php
    $name = 'max' ;
    $surname ='mcdonalds' ;
    $age = '27' ;
    echo "Меня зовут $name <br> Моя фамилия $surname <br> Мне $age лет<br>";



$array = array(
    'header' => 'header.php',
    'content' => 'content.php',
    'footer' => 'footer.php',
    
);



//for ($x = 1; $x <= 100; /*$x+2*/) {
//    echo $x ;
//}

/*
switch ($age) {
    case ($age <= 6):
        echo "Вам в садик";
        break;
    case ($age <= 16):
        echo "Вам в школу";
        break;
    case ($age <= 23):
        echo "Вам на работу";
        break;
    case ($age <= 65):
        echo "Вам на пенсию";
        break;
    case ($age <= 105):
        echo "Вам в могилу";
        break;
    default:
        echo "go a hell";
}
*/


//git chekout
//git push -на глобальный сервер
//



//preg-match   проверка на числа
?>

<?php

	if ($_POST['count']) {
        $a = (int)$_POST['first'];
        $b = (int)$_POST['second'];
        $c = $_POST['operation'];

        //$e;
        if ($c == '+')
        {
            $e = $a + $b;
        }
        elseif ($c == '-')
        {
            $e = $a - $b;
        }
        elseif ($c == '*')
        {
            $e = $a * $b;
        }
        elseif ($c == '/')
        {
            if ($b == 0)
            {
                echo "не делится на 0";
            }
            else
            {
                $e = $a / $b;
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calc</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="first" required>
    <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="second" required>
    <input type="submit" name="count" value="=" required>
    <input type="text" name="totals" readonly />              <!--  как итог выводить в инпут name= total. вместо
      echo $e -->
</form>


<?php
    echo $e;
?>


</body>
</html>





