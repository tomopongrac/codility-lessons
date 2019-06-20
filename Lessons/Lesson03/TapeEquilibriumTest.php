<?php

namespace Tests;

use Lessons\Lesson03\TapeEquilibrium;
use PHPUnit\Framework\TestCase;

class TapeEquilibriumTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new TapeEquilibrium();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[3, 1, 2, 4, 3]],
                1,
            ],
            [
                [[1, 2, 3, 4, 2]],
                0,
            ],
            [
                [[20000, 20000]],
                0,
            ],
        ];
    }
}
