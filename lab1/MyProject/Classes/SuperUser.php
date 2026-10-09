<?php

namespace MyProject\Classes;

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/SuperUserInterface.php';

/**
 * Класс супер-пользователя.
 *
 * @package MyProject\Classes
 */
class SuperUser extends User implements SuperUserInterface
{
    /**
     * Счётчик созданных экземпляров класса SuperUser.
     *
     * @var int
     */
    public static $count = 0;

    /**
     * Роль супер-пользователя.
     *
     * @var string
     */
    public $role;

    /**
     * Конструктор супер-пользователя.
     *
     * @param string $name     Имя
     * @param string $login    Логин
     * @param string $password Пароль
     * @param string $role     Роль
     */
    public function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);

        $this->role = $role;

        self::$count++;
        User::$count--;
    }

    /**
     * Выводит информацию о супер-пользователе.
     *
     * @return void
     */
    public function showInfo()
    {
        parent::showInfo();
        echo 'Роль: ' . $this->role . '<br>';
        echo '<hr>';
    }

    /**
     * Возвращает ассоциативный массив свойств объекта.
     *
     * @return array
     */
    public function getInfo()
    {
        return array(
            'name'  => $this->name,
            'login' => $this->login,
            'role'  => $this->role,
        );
    }
}
