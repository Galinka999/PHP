<?php
//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//если $a и $b положительные, вывести их разность;
//если $а и $b отрицательные, вывести их произведение;
//если $а и $b разных знаков, вывести их сумму;

echo $a = rand(-10,10) . '<br>';
echo $b = rand(-10,10) . '<br>';
if ($a >= 0 && $b >= 0) {
    echo "Разность" . '<br>';
} elseif ($a < 0 && $b < 0) {
    echo "Произведение" . '<br>';
} elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
    echo "Сумма" . '<br>';
}

//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return. В делении проверьте деление на 0 и верните текст ошибки.

function summ($arg1, $arg2) {
    return $arg1 + $arg2;
}
function difference($arg1, $arg2) {
    return $arg1 - $arg2;
}
function multipl($arg1, $arg2) {
    return $arg1 * $arg2;
}
function division($arg1, $arg2) {
    if($arg2 != 0) {
        return $arg1 / $arg2;
    } else {
        return "Ошибка";
    }

}
$arg1 = 3;
$arg2 = 0;
echo summ($arg1,$arg2) . '<br>';
echo difference($arg1,$arg2) . '<br>';
echo multipl($arg1,$arg2) . '<br>';
echo division($arg1,$arg2) . '<br>';

//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
//где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от
//переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3)
//и вернуть полученное значение (использовать switch).
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "summ":
            echo summ($arg1,$arg2) . '<br>';
            break;
        case "difference":
            echo difference($arg1,$arg2) . '<br>';
            break;
        case "multipl":
            echo multipl($arg1,$arg2) . '<br>';
            break;
        case "division":
            echo division($arg1,$arg2) . '<br>';
            break;
        default:
            echo "Ошибка в параметрах";
    }
}
echo mathOperation(3, 0, "division");

//2. Присвоить переменной $а значение в промежутке [0..15].
// С помощью оператора switch организовать вывод чисел от $a до 15.
// При желании сделайте это задание через рекурсию.
//НЕ РЕШЕНО
//echo $c = rand(0,15) . '<br>';
////$n = $c + $c++;
//switch ($c) {
//    case $c:
//        echo $c;
//    case ($c<15):
//        echo ++$c;
//}
//$d = range($c,15);
//echo $d;


//6. *С помощью рекурсии организовать функцию возведения числа в степень.
//Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты