<?php
$id = isset($_GET["id"]) ? $_GET["id"] : "";
$day        = date('d');
$month      = date('m');
$year       = date('Y');
$hour       = (int) date('H');
$greetings  = '';

$menu = [
    ['href' => '/', 'anchor' => 'Домой'],
    ['href' => '/table.php', 'anchor' => 'Таблица умножения'],
    ['href' => '#', 'anchor' => 'Контакты'],
];

$menu2 = [
    ['href' => '/', 'anchor' => 'Домой2'],
    ['href' => '/table.php', 'anchor' => 'Таблица умножения2'],
    ['href' => '#', 'anchor' => 'Контакты'],
];

if($hour >= 6 && $hour < 12){
    $greetings = 'Доброе утро';
}elseif($hour >=12 && $hour < 18) {
    $greetings = 'Доброе день';
}elseif($hour >=18 && $hour < 24) {
    $greetings = 'Доброе вечер';
}else {
    $greetings = 'Доброе ночь';
}