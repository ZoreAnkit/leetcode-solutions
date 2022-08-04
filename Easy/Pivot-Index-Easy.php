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

                if ($leftSum == $rightSum)
                    return $i;
            }
            $leftSum += $nums[$i];
            if ($leftSum < $rightSum)
                $rightSum = 0;
        }
        if ($leftSum != $rightSum)
            return -1;
    }
}

$sol = new Solution();
$sol->pivotIndex([1, 2, 3]); 

/* TEST CASES 

1. [1,7,3,6,5,6] 
OUTPUT: 3

2. [1,2,3] 
OUTPUT: -1

3. [2,1,-1]
OUTPUT: 0

*/