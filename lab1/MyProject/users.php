<?php

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

/**
 * Автозагрузчик классов.
 *
 * @param string $className Полное имя класса
 * @return void
 */
spl_autoload_register(function ($className) {
    $parts     = explode('\\', $className);
    $shortName = end($parts);
    $file      = __DIR__ . '/Classes/' . $shortName . '.php';

    if (is_file($file)) {
        require_once $file;
    }
});

// Обычные пользователи
$user1 = new User('Иван', 'ivan', 'pass1');
$user2 = new User('Пётр', 'petr', 'pass2');
$user3 = new User('Анна', 'anna', 'pass3');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

// Супер-пользователь
$user = new SuperUser('Админ', 'admin', 'root', 'administrator');
$user->showInfo();

// Массив свойств супер-пользователя
echo '<pre>';
print_r($user->getInfo());
echo '</pre>';

// Статистика
echo 'Всего обычных пользователей: ' . User::$count . '<br>';
echo 'Всего супер-пользователей: '   . SuperUser::$count . '<br>';
