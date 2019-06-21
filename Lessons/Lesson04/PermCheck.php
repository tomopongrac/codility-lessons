<?php

namespace Lessons\Lesson04;

class PermCheck
{
    public function solution(array $A): int
    {
        $checkingArray = array_fill(1, count($A), true);

        foreach ($A as $number) {
            unset($checkingArray[$number]);
        }

        return count($checkingArray) == 0 ? 1 : 0;
    }
}
