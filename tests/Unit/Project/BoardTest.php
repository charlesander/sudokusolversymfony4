<?php

namespace App\Tests\Unit\Classes;

use Exceptions\IncorrectNumberOfCellValuesPassed;
use Project\Board;
use Project\Cell\Cell;
use PHPUnit\Framework\TestCase;

class BoardTest extends TestCase
{
    public function boardCanOnlyBeInstatiaedWith81CellValues() {
        $this->expectException(IncorrectNumberOfCellValuesPassed::class);
        $cellValues = [1,2,3,4,5,6,7,8];
        $board = new Board($cellValues);
        $cellValues = [];
        $board = new Board($cellValues);
    }

    public function test_board_created_ok()
    {
        //Instantiated Board has following:

        //1) complete default false
        $cellValues = [0,0,0,0,0,0,0,0,0,
            0,0,0,0,0,0,0,0,0,
            0,0,0,0,0,0,0,0,0,
            0,0,0,0,0,0,0,0,0,
            0,0,0,0,0,0,0,0,0,
            0,0,0,0,0,0,0,0,0,
            0,0,0,0,0,0,0,0,0,
            0,0,0,0,0,0,0,0,0,
            0,0,0,0,0,0,0,0,0,];
        $this->assertEquals(81, count($cellValues));

        $board = new Board($cellValues);
        $completed = $board->isCompleted();
        $this->assertFalse($completed);

        //2) array of 81 Cells
        $cells = $board->getCells();
        $this->assertIsarray($cells);

        $this->assertEquals(81, count($cells));

        $this->assertInstanceOf(Cell::class, $cells[0]);
        $this->assertInstanceOf(Cell::class, $cells[60]);
        $this->assertInstanceOf(Cell::class, $cells[80]);

    }
}
