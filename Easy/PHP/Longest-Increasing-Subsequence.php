<?php

// https://leetcode.com/problems/roman-to-integer/

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS($nums)
    {
        $subSeq = [];
        // foreach ($nums as $key => $value) {
        //     if (!in_array($value, $subSeq))
        //         $subSeq[] = $value;
        // }

        $i = 0;

        while ($i < count($nums)) {
            if ($nums[$i] < $nums[$i + 1])
                $subSeq[] = $nums[$i];
            $i++;
        }

        print_r($subSeq);
    }
}

$sol = new Solution();
$sol->lengthOfLIS([10, 9, 2, 5, 3, 7, 101, 18]);

//TEST CASES
// "III"
// "LVIII"
// "MCMXCIV"
