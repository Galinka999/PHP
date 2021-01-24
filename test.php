<?php
echo "Второй файл";
//парсинг
//$text = file_get_contents("https://www.php.net/manual/ru/language.expressions.php");
//echo $text;
$a = 5;
$b = '05';
var_dump($a == $b . '<br>');         // Почему true?
var_dump((int)'012345');     // Почему 12345?
var_dump((float)123.0 === (int)123.0); // Почему false?
var_dump((int)0 === (int)'hello, world'); // Почему true?

//Задание 5. Используя только две переменные, поменяйте их значение местами.
// Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.
$x = 5;
$y = 6;

//$x = $x + $y; //3=1+2
//$y = $x - $y; //y=3-2
//$x = $x - $y; //x=3-1

//либо в одну строчку
$x = $x + $y - ($y = $x);

echo "x = {$x} y = {$y}";