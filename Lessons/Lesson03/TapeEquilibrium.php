<?php

namespace Lessons\Lesson03;

class TapeEquilibrium
{
    public function solution(array $A): int
    {
        $arrayLength = count($A);
        $leftSum = $A[0];
        $rightSum = array_sum(array_slice($A, 1));
        $minDistance = abs($leftSum - $rightSum);
        for ($i = 1; $i < $arrayLength - 1; $i++) {
            $leftSum += $A[$i];
            $rightSum -= $A[$i];
            $minDistance = min($minDistance, abs($leftSum - $rightSum));
        }

        return $minDistance;
    }
}
