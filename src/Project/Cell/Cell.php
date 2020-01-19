<?php
/**
 * Created by PhpStorm.
 * User: irynnebaguma
 * Date: 19/01/2020
 * Time: 11:27
 */

namespace Project\Cell;


class Cell
{
    /**
     * @var int
     */
    protected $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     *
     */
    public function getValue(): int
    {
        return $this->value;
    }
}