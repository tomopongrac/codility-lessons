<?php

namespace Tests;

use Lessons\Lesson03\PermMissingElem;
use PHPUnit\Framework\TestCase;

class PermMissingElemTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new PermMissingElem();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[2, 3, 1, 5]],
                4,
            ],
        ];
    }
}
