<?php

namespace Lessons\Lesson02;

class OddOccurrencesInArray
{
    public function solution($A): int
    {
        $countValues = [];

        foreach ($A as $number) {
            if (!isset($countValues[$number])) {
                $countValues[$number] = 1;
                continue;
            }

            $countValues[$number] += 1;
        }

        foreach ($countValues as $value => $count) {
            if ($count % 2 === 1) {
                return $value;
            }
        }

        return 0;
    }
}
