<?php

namespace Tests;

use Lessons\Lesson01\BinaryGap;
use PHPUnit\Framework\TestCase;

class BinaryGapTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new BinaryGap();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [1041],
                5,
            ],
            [
                [32],
                0,
            ],
            [
                [-1],
                0,
            ],
            [
                [15],
                0,
            ],
            [
                [561892],
                3,
            ],
        ];
    }
}
