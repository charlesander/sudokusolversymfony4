<?php

namespace App\Tests\Unit\Project;

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
        $cell = $cellFactory->create('preset');
        $this->assertInstanceOf(CellPreset::class, $cell);

        $cell = $cellFactory->create('settable');
        $this->assertInstanceOf(CellSettable::class, $cell);

        $this->expectException(InvalidCellTypeException::class);
        $cell = $cellFactory->create('somethingelse');
    }
}
