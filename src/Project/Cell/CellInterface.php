<?php
/**
 * Created by PhpStorm.
 * User: irynnebaguma
 * Date: 19/01/2020
 * Time: 12:04
 */

namespace Project\Cell;


interface CellInterface
{
    /**
     * @param int $value
     * @return mixed
     */
    public function setValue(int $value);

    /**
     * @return int
     */
    public function getValue(): int;
}