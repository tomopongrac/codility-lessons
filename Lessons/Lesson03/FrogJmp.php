<?php

namespace Lessons\Lesson03;

class FrogJmp
{
    public function solution(int $X, int $Y, int $D): int
    {
        return (int) ceil(($Y - $X) / $D);
    }
}
