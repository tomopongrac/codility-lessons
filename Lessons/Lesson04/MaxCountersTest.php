<?php

namespace Tests;

use Lessons\Lesson04\MaxCounters;
use PHPUnit\Framework\TestCase;

class MaxCountersTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MaxCounters();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [5, [3, 4, 4, 6, 1, 4, 4]],
                [3, 2, 2, 4, 2],
            ],
        ];
    }
}
