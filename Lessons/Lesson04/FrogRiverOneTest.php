<?php

namespace Tests;

use Lessons\Lesson04\FrogRiverOne;
use PHPUnit\Framework\TestCase;

class FrogRiverOneTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new FrogRiverOne();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [5, [1, 3, 1, 4, 2, 3, 5, 4]],
                6,
            ],
            [
                [7, [1, 3, 1, 4, 2, 3, 5, 4]],
                -1,
            ],
            [
                [3, [1, 3, 1, 3, 2, 1, 3]],
                4,
            ],
        ];
    }
}
