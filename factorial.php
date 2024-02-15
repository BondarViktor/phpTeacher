<?php
// Функция для вычисления факториала числа
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Вычисляем факториал числа 5
$num = 5;
$result = factorial($num);

// Вывод результата
echo "Факториал числа $num равен $result";
?>
