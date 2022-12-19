<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Zanderwar\Namify\Namify;

class TestGenerate extends TestCase
{
    public function testGenerate()
    {
        // over 1000 iterations tests that a generated name never exceeds the max chars
        for ($i = 0; $i < 1000; $i++) {
            $this->assertLessThanOrEqual(20, strlen(Namify::generate()));
        }
    }

    public function testGenerateUnique()
    {
        // over 1000 iterations tests that a generated name never exceeds the max chars
        $used = [];
        for ($i = 0; $i < 1000; $i++) {
            $name = Namify::generate(30, true);
            $this->assertLessThanOrEqual(30, strlen($name));
            $this->assertNotContains($name, $used);
            $used[] = $name;
        }
    }

    public function testPermutations()
    {
        die(var_dump(Namify::calculatePermutations()));
        $this->assertGreaterThanOrEqual(65000, Namify::calculatePermutations());
    }
}
