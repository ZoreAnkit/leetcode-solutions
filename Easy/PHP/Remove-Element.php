<?php

// https://leetcode.com/problems/remove-element/

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement($nums, $val)
    {
        $pointer1 = $k = 0;
        $pointer2 = count($nums) - 1;

        while ($pointer1 < $pointer2) {
            if ($nums[$pointer1] == $val) {
                if ($nums[$pointer2] == $val)
                    $pointer2 = $pointer2 - 1;
                $nums[$pointer1] = $nums[$pointer2];
                $nums[$pointer2] = $val;
                $k++;
            }
            $pointer1++;
        }
        echo count($nums) - 1 - $k;
    }
}

$sol = new Solution();
$sol->removeElement([3, 2, 2, 3],  3);

//TEST CASES
// [0,1,2,2,3,0,4,2], val = 2
// [3, 2, 2, 3],  3
