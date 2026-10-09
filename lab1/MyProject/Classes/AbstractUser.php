<?php

namespace MyProject\Classes;

/**
 * Абстрактный базовый класс пользователя.
 *
 * @package MyProject\Classes
 */
abstract class AbstractUser
{
    /**
     * Выводит информацию о пользователе.
     *
     * @return void
     */
    abstract public function showInfo();
}
