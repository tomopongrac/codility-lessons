<?php

namespace Lessons\Lesson02;

class CyclicRotation
{
    public function solution($A, $K): array
    {
        $arrayLength = count($A);
        if ($K == 0 || $arrayLength == 0) {
            return $A;
        }

        $sliceIndex = $arrayLength - $this->calculateSlicedIndex($K, $arrayLength);

        $sliceArray = array_slice($A, 0, $sliceIndex);
        $secondArray = array_slice($A, $sliceIndex);
        return array_merge($secondArray, $sliceArray);
    }

    protected function calculateSlicedIndex(int $K, int $arrayLength): int
    {
        return $K % $arrayLength;
    }
}
