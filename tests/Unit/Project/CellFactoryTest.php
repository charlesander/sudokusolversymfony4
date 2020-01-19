<?php

namespace App\Tests\Unit\Project;

use Exceptions\CannotSetValueOfPresetCellException;
use Exceptions\InvalidCellTypeException;
use PHPUnit\Framework\TestCase;
use Project\Cell\CellFactory;
use Project\Cell\CellPreset;
use Project\Cell\CellSettable;

class CellFactoryTest extends TestCase
{
    public function testSomething()
    {
        $cellFactory = new CellFactory();

        //Create function will create a new cell of passed 'type'
        $cell = $cellFactory->create(5);
        $this->assertInstanceOf(CellPreset::class, $cell);

        $cell = $cellFactory->create(0);
        $this->assertInstanceOf(CellSettable::class, $cell);

        $this->expectException(InvalidCellTypeException::class);
        $cell = $cellFactory->create(11);
    }

    public function testInstatiatingSettableCell()
    {
        $cellFactory = new CellFactory();
        $cell = $cellFactory->create(0);
        $this->assertEquals(0, $cell->getValue());
    }

    public function testInstatiatingPresetCell()
    {
        $cellFactory = new CellFactory();
        $cell = $cellFactory->create(1);
        $this->assertEquals(1, $cell->getValue());

        $cell = $cellFactory->create(5);
        $this->assertEquals(5, $cell->getValue());

        $cell = $cellFactory->create(9);
        $this->assertEquals(9, $cell->getValue());
    }

    public function testSettableCell()
    {
        //You may set the value of settable cells
        $cellFactory = new CellFactory();
        $cell = $cellFactory->create(0);
        $cell->setValue(1);
        $this->assertEquals(1, $cell->getValue());
    }

    public function testCellPreset()
    {
        //You may not set the value of a preset cell
        $cellFactory = new CellFactory();
        $cell = $cellFactory->create(2);

        $this->expectException(CannotSetValueOfPresetCellException::class);
        $cell->setValue(1);

    }
}
