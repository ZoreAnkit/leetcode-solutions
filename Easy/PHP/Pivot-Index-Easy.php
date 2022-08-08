<?php

// https://leetcode.com/problems/find-pivot-index/

class Solution
{

    /**
     * @return Integer
     */
    function pivotIndex($nums)
    {
        $leftSum = 0;
        $rightSum = 0;
        $arrCount = count($nums) - 1;

        for ($i = 0; $i <= $arrCount; $i++) {
            for ($j = $i + 1; $j <= $arrCount; $j++) {
                $rightSum += $nums[$j];

                if ($leftSum == $rightSum) {
                    echo $i;
                    return $i;
                }
            }
            $leftSum += $nums[$i];
            if ($leftSum < $rightSum)
                $rightSum = 0;
        }
        if ($leftSum != $rightSum || $rightSum < $leftSum)
            return -1;
    }
}

$sol = new Solution();
$sol->pivotIndex([-1, -1, -1, -1, -1, 0]);
