<?php

// https://leetcode.com/problems/longest-common-prefix/

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $prefix = count($strs) == 0 ? "" : $strs[0];
        echo "before --> " . $prefix . "\r\n";
        for ($i = 1; $i < count($strs); $i++) {
            $j = 0;
            while ($j < strlen($prefix)) {
                // if ($j < strlen($strs[$i])) {
                echo "j --> " . $j . " prefix --> " . $prefix[$j] . " str --> " . $strs[$i][$j] . "\r\n";
                if ($prefix[$j] != $strs[$i][$j])
                    $prefix = substr($prefix, 0, -1);
                $j++;
                // }
            }
        }
        echo "after --> " . $prefix . "\r\n";
        return $prefix;
    }
}

$sol = new Solution();
$sol->longestCommonPrefix(["cir", "car"]);

//TEST CASES
// ["flower", "flow", "flight"]
// ["ab", "a"]
// ["dog", "racecar", "car"]
