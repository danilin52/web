<?php

namespace MyProject\Classes;

require_once __DIR__ . '/AbstractUser.php';

/**
 * Класс обычного пользователя.
 *
 * @package MyProject\Classes
 */
class User extends AbstractUser
{
    /**
     * Счётчик созданных экземпляров класса User.
     *
     * @var int
     */
    public static $count = 0;

    /**
     * Имя пользователя.
     *
     * @var string
     */
    public $name;

    /**
     * Логин пользователя.
     *
     * @var string
     */
    public $login;

    /**
     * Пароль пользователя.
     *
     * @var string
     */
    private $password;

    /**
     * Конструктор пользователя.
     *
     * @param string $name     Имя
     * @param string $login    Логин
     * @param string $password Пароль
     */
    public function __construct($name, $login, $password)
    {
        $this->name     = $name;
        $this->login    = $login;
        $this->password = $password;

        self::$count++;
    }

    /**
     * Деструктор объекта.
     *
     * @return void
     */
    public function __destruct()
    {
        echo 'Пользователь ' . $this->login . ' удален.<br>';
    }

    /**
     * Выводит информацию о пользователе.
     *
     * @return void
     */
    public function showInfo()
    {
        echo 'Имя: '    . $this->name     . '<br>';
        echo 'Логин: '  . $this->login    . '<br>';
        echo 'Пароль: ' . $this->password . '<br>';
        echo '<hr>';
    }
}
