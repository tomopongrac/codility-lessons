<?php

namespace Lessons\Lesson04;

class FrogRiverOne
{
    public function solution(int $X, array $A): int
    {
        $checkingArray = array_fill(1, $X, true);

        foreach ($A as $second => $number) {
            if (isset($checkingArray[$number])) {
                unset($checkingArray[$number]);
                if (count($checkingArray) == 0) {
                    return $second;
                }
            }
        }

        return -1;
    }
}
