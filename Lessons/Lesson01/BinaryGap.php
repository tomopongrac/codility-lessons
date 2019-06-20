<?php

namespace Lessons\Lesson01;

class BinaryGap
{
    public function solution($N): int
    {
        $binary = (string) decbin($N);

        $count = 0;
        $maxCount = 0;
        for ($i = 0; $i < strlen($binary); $i++) {
            $number = $binary[$i];
            if ($number == 1) {
                if ($count > $maxCount) {
                    $maxCount = $count;
                }

                $count = 0;
                continue;
            }

            $count++;
        }

        return $maxCount;
    }
}
