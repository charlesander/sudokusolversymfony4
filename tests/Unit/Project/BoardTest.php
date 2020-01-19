<?php

namespace App\Tests\Unit\Classes;

use Project\Board;
use Project\Cell\Cell;
use PHPUnit\Framework\TestCase;

class BoardTest extends TestCase
{
    public function test_board_created_ok()
    {
        //Instantiated Board has following:
        //1) complete default false
        $board = new Board();
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
