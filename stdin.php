<?php

// для ввода значений
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));

// Проверяем, что числа целые
if (!is_numeric($input1) || !is_numeric($input2)) {
// Если не число, выводим сообщение
    fwrite(STDERR, "Введите, пожалуйста, число\n");
    exit(1); 
}

// Преобразуем в целые числа
$number1 = (int)$input1;
$number2 = (int)$input2;

// Проверяем, что второе число не равно нулю
if ($number2 === 0) {
    // Если деление на ноль, выводим ошибку в stderr
    fwrite(STDERR, "Делить на 0 нельзя\n");
    exit(1);  
}

// Выполняем деление и выводим результат
$result = $number1 / $number2;
echo $result . "\n";
