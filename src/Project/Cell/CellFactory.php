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
    public function create(string $type): Cell {
        if($type == Cell::CELL_SETTABLE_TYPE) {
            return new CellSettable();
        } else if ($type == Cell::CELL_PRESET_TYPE) {
            return new CellPreset();
        }
        throw new InvalidCellTypeException();
    }
}