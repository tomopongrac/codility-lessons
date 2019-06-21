<?php

namespace Tests;

use Lessons\Lesson04\PermCheck;
use PHPUnit\Framework\TestCase;

class PermCheckTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new PermCheck();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[4, 1, 3, 2]],
                1,
            ],
            [
                [[4, 1, 3]],
                0,
            ],
        ];
    }
}
