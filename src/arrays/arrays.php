<?php

$array = array();


for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand(0, 99);
}

// Виводимо перший і останній елементи масива
echo "Перший елемент: " . $array[0] . "\n";
echo "Останній елемент: " . end($array) . "\n";

// Видаляємо елемент, який знаходиться посередині
$middleIndex = floor(count($array) / 2);
unset($array[$middleIndex]);

// Додаємо елемент до масиву
$array[] = rand(0, 99);
?>