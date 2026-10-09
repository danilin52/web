<?php

namespace MyProject\Classes;

/**
 * Интерфейс супер-пользователя.
 *
 * @package MyProject\Classes
 */
interface SuperUserInterface
{
    /**
     * Возвращает ассоциативный массив свойств объекта.
     *
     * @return array
     */
    public function getInfo();
}
