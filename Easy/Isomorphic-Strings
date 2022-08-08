<?php

// https://leetcode.com/problems/isomorphic-strings/

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t)
    {
        $firstString = [];
        for ($i = 0; $i < strlen($s); $i++) {
            for ($j = $i + 1; $j < strlen($s); $j++) {
                if ($s[$i] == $s[$j]) {
                    $firstString[] = $j;
                }
            }
        }

        $secondString = [];
        for ($i = 0; $i < strlen($t); $i++) {
            for ($j = $i + 1; $j < strlen($t); $j++) {
                if ($t[$i] == $t[$j]) {
                    $secondString[] = $j;
                }
            }
        }

        $matchedString1 = implode('', $firstString);
        $matchedString2 = implode('', $secondString);

        echo $matchedString1 . " -->>> " . $matchedString2 . "\r\n";

        if ($matchedString1 === $matchedString2)
            return true;
        return false;
    }
}

$sol = new Solution();
$sol->isSubsequence("aba", "baa");

//"bbbaaaba"
// "aaabbbba"
// "papap"
// "titii"
// "aba"
// "baa"
