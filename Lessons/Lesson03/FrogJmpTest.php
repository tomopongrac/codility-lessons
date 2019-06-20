<?php

namespace Tests;

use Lessons\Lesson03\FrogJmp;
use PHPUnit\Framework\TestCase;

class FrogJmpTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new FrogJmp();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [10, 85, 30],
                3,
            ],
            [
                [10, 10, 30],
                0,
            ],
        ];
    }
}
