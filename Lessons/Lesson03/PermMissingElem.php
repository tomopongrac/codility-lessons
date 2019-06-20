<?php

namespace Lessons\Lesson03;

class PermMissingElem
{
    public function solution(array $A): int
    {
        $checkingArray = array_fill(1, count($A) + 1, true);

        foreach ($A as $number) {
            unset($checkingArray[$number]);
        }

        return array_keys($checkingArray)[0];
    }
}
