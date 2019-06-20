<?php

namespace Tests;

use Lessons\Lesson02\CyclicRotation;
use PHPUnit\Framework\TestCase;

class CyclicRotationTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CyclicRotation();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[3, 8, 9, 7, 6], 1],
                [6, 3, 8, 9, 7],
            ],
            [
                [[1, 2, 3], 4],
                [3, 1, 2],
            ],
            [
                [[0, 0, 0], 1],
                [0, 0, 0],
            ],
            [
                [[1, 2, 3, 4], 4],
                [1, 2, 3, 4],
            ],
            [
                [[3, 8, 9, 7, 6], 3],
                [9, 7, 6, 3, 8],
            ],
            [
                [[1, 2, 3], 0],
                [1, 2, 3],
            ],
            [
                [[], 0],
                [],
            ],
        ];
    }
}
