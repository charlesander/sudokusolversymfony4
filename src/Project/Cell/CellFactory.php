<?php
/**
 * Created by PhpStorm.
 * User: irynnebaguma
 * Date: 19/01/2020
 * Time: 11:43
 */

namespace Project\Cell;


use Exceptions\InvalidCellTypeException;
use Project\Cell\Cell;

class CellFactory
{
    public function create(int $value): Cell
    {
        if ($value === 0) {
            return new CellSettable(0);
        } else if ($value <= 9) {
            return new CellPreset($value);
        }
        throw new InvalidCellTypeException();
    }
}