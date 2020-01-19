<?php

namespace Project;

use Project\Cell\Cell;

/**
 * Created by PhpStorm.
 * User: irynnebaguma
 * Date: 19/01/2020
 * Time: 11:14
 */
class Board
{
    /**
     * @var bool
     */
    protected $completed;

    protected $cells;

    /**
     * Board constructor.
     */
    public function __construct()
    {
        $this->completed = false;
        $this->cells = [];
        for ($i = 0; $i < 81; $i++) {
            $this->cells[] = new Cell('preset');
        }
    }

    /**
     * @return bool
     */
    public function isCompleted(): bool
    {
        return $this->completed;
    }

    /**
     * @return array
     */
    public function getCells(): array
    {
        return $this->cells;
    }


}