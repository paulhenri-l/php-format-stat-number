<?php

namespace PaulhenriL\PhpFormatStatNumber\Tests\Unit;

use PaulhenriL\PhpFormatStatNumber\Tests\TestCase;

class FsnTest extends TestCase
{
    public function test_floats_are_formatted()
    {
        $this->assertEquals(
            "10 000,20",
            fsn(10000.2010)
        );
    }

    public function test_ints_are_formatted()
    {
        $this->assertEquals(
            "10 000,00",
            fsn(10000)
        );
    }
}
