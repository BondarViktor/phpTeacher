<?php
// Функция для генерации случайного пароля заданной длины
function generatePassword($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $password;
}

// Функция для шифрования строки с использованием хеша
function hashString($input) {
    return hash('sha256', $input);
}

// Функция для проверки является ли строка палиндромом
function isPalindrome($string) {
    $cleanedString = str_replace([' ', ',', '.'], '', $string);
    $reversedString = strrev($cleanedString);
    
    return strtolower($cleanedString) == strtolower($reversedString);
}

// Функция для генерации случайного уникального идентификатора
function generateUUID() {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}

// Пример использования новых функций
echo "Случайный пароль: " . generatePassword() . "\n";
echo "Хеш строки 'Hello, World!': " . hashString('Hello, World!') . "\n";
echo "Является ли 'A man, a plan, a canal, Panama!' палиндромом: " . (isPalindrome('A man, a plan, a canal, Panama!') ? 'Да' : 'Нет') . "\n";
echo "Случайный уникальный идентификатор: " . generateUUID() . "\n";
?>
