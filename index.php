<?php
// Определить массив с днями недели и температурой
$температура = [
    "Понедельник" => 25,
    "Вторник" => 27,
    "Среда" => 29,
    "Четверг" => 26,
    "Пятница" => 28
];

// Вывести массив, перебирая его с помощью цикла foreach
foreach ($температура as $день => $температура) {
    echo "$день: $температура°C" . PHP_EOL;
}

?>