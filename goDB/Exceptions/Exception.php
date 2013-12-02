<?php
/**
 * Базовое исключение при работе с библиотекой
 *
 * @package    go\DB
 * @subpackage Exceptions
 * @link       https://github.com/vasa-c/go-db/wiki/Exceptions
 * @author     Григорьев Олег aka vasa_c
 */

namespace go\DB\Exceptions;

interface Exception
{
    /**
     * @return array
     */
    public function getTrace();

    /**
     * @return string
     */
    public function getFile();

    /**
     * @return int
     */
    public function getLine();
}
