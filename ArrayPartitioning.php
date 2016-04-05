<?php

/**
 * @author Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */
class ArrayPartitioning
{
    /**
     * @param array|int[] $inputNumbers Input array of the numbers
     * @param int $numArrays How many arrays you need to get from $inputNumbers
     * @return array|int[]
     */
    static public function algoritmOne(array $inputNumbers, int $numArrays)
    {
        if ($numArrays <= 0) {
            throw new InvalidArgumentException('$numArrays must be a positive number');
        }

        $numbersCount = count($inputNumbers);
        if ($numArrays > $numbersCount) {
            throw new InvalidArgumentException('$numArrays must be smaller then count of input numbers');
        }

        if ($numbersCount == $numArrays) {
            return $inputNumbers;
        }

        $outputArrays = array_fill(0, $numArrays, []);
        rsort($inputNumbers, SORT_NUMERIC);

        foreach($inputNumbers as $value) {
            usort(
                $outputArrays,
                function($a, $b) {
                    return array_sum($a) > array_sum($b);
                }
            );

            $outputArrays[0][] = $value;
        }

        return $outputArrays;
    }
}

function debug($out) {
    foreach ($out as $key => $value) {
        var_dump(implode(',', $value) . ' sum ' . array_sum($value));
    }
}

debug(
    ArrayPartitioning::algoritmOne(
        [1,1,1,1,1,1,1,1,2,4,7,6,2,8],
        3
    )
);

debug(
    ArrayPartitioning::algoritmOne(
        [5, 8, 6, 1, 1, 1, 4, 7, 9],
        3
    )
);
