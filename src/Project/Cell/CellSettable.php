<?php
/**
 * Created by PhpStorm.
 * User: irynnebaguma
 * Date: 19/01/2020
 * Time: 12:06
 */

namespace Project\Cell;


class CellSettable extends Cell implements CellInterface
{
    /**
     * @param int $value
     * @return mixed
     */
    public function setValue(int $value) {
        $this->value = $value;
    }
}