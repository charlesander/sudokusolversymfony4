<?php
/**
 * Created by PhpStorm.
 * User: irynnebaguma
 * Date: 19/01/2020
 * Time: 12:09
 */

namespace Project\Cell;


use Exceptions\CannotSetValueOfPresetCellException;

class CellPreset extends Cell implements CellInterface
{
    /**
     * @param int $value
     * @return void
     * @throws CannotSetValueOfPresetCellException
     */
    public function setValue(int $value) {
        throw new CannotSetValueOfPresetCellException();
    }
}