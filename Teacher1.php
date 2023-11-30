<?php
// Функция для нахождения среднего значения массива
function calculateAverage($numbers) {
    $sum = array_sum($numbers);
    $count = count($numbers);
    
    if ($count > 0) {
        return $sum / $count;
    } else {
        return null; // избегаем деление на ноль
    }
}

// Функция для проверки простого числа
function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Функция для получения текущего времени
function getCurrentTime() {
    return date('H:i:s');
}

// Функция для поиска максимального значения в массиве
function findMax($numbers) {
    return max($numbers);
}

// Функция для проверки является ли год високосным
function isLeapYear($year) {
    return (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0));
}

// Пример использования новых функций
$numbers = [4, 8, 15, 16, 23, 42];
echo "Среднее значение массива: " . calculateAverage($numbers) . "\n";
echo "Число 7 простое: " . (isPrime(7) ? 'Да' : 'Нет') . "\n";
echo "Текущее время: " . getCurrentTime() . "\n";
echo "Максимальное значение массива: " . findMax($numbers) . "\n";
echo "Год 2024 високосный: " . (isLeapYear(2024) ? 'Да' : 'Нет') . "\n";
?>
