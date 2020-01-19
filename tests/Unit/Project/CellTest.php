<?php

namespace App\Tests\Unit\Project;

use PHPUnit\Framework\TestCase;
use Project\Cell\Cell;
use Project\Cell\CellPreset;
use Project\Cell\CellSettable;

class CellTest extends TestCase
{
    public function testSomething()
    {

        //An instantiated cell has the following:
        //1) A string 'type' of either 'preset' or 'settable'
        $cell = new Cell(0);
        $this->assertInstanceOf(Cell::class, $cell);

        $cell = new CellPreset(0);
        $this->assertInstanceOf(CellPreset::class, $cell);

        $cell = new CellSettable(1);
        $this->assertInstanceOf(CellSettable::class, $cell);
    }
}
