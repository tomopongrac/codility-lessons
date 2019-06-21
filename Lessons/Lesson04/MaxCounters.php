<?php

namespace Lessons\Lesson04;

class MaxCounters
{
    public function solution(int $N, array $A): array
    {
        $countingArray = array_fill(0, $N, 0);
        $maxCounter = 0;
        $last = false;

        foreach ($A as $number) {
            if ($number > $N) {
                $last = $maxCounter;
                continue;
            }
            if ($countingArray[$number - 1] > $last) {
                $countingArray[$number - 1] += 1;
            } else {
                $countingArray[$number - 1] = $last + 1;
            }
            if ($countingArray[$number - 1] > $maxCounter) {
                $maxCounter = $countingArray[$number - 1];
            }
        }

        $countingArray = array_map(function ($counter) use ($last) {
            return ($counter < $last) ? $last : $counter;
        }, $countingArray);

        return $countingArray;
    }
}
