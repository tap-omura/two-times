<?php

namespace TapOmura\TwoTimes\Test;

use PHPUnit\Framework\TestCase;
use TapOmura\TwoTimes\TwoTimes;

class TwoTimesTest extends TestCase
{
    public function testTwoTimes()
    {
        $twoTimes = new TwoTimes();
        $this->assertEquals(4, $twoTimes->twoTimes(2));
    }

    public function testFloat()
    {
        $twoTimes = new TwoTimes();
        $this->assertEquals(4.4, $twoTimes->twoTimes(2.2));
    }


}