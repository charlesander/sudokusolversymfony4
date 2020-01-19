<?php

namespace Project;

use Exceptions\IncorrectNumberOfCellValuesPassed;
use Project\Cell\Cell;
use Project\Cell\CellFactory;

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
    public function __construct(array $cellValues)
    {
        if (count($cellValues) != 81) {
            throw new IncorrectNumberOfCellValuesPassed();
        }

        $cellFactory = new CellFactory();

        $this->completed = false;
        $this->cells = [];
        for ($i = 0; $i < 81; $i++) {
            $this->cells[] = $cellFactory->create($cellValues[$i]);
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