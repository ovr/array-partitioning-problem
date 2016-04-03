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
    public function algoritmOne(array $inputNumbers, int $numArrays)
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

        $outputArrays = []; ////  [[8,2], [7,2,1], [6,4,1]]

        return $outputArrays;
    }
}
