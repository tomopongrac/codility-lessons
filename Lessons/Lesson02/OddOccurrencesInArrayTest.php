<?php

namespace Tests;

use Lessons\Lesson02\OddOccurrencesInArray;
use PHPUnit\Framework\TestCase;

class OddOccurrencesInArrayTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new OddOccurrencesInArray();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[9, 3, 9, 3, 9, 7, 9]],
                7,
            ],
        ];
    }
}
