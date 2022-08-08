<?php

// https://leetcode.com/problems/roman-to-integer/

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $romanAlpha = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $sum = 0;
        $i = strlen($s);

        while ($i--) {
            if (($s[$i] == 'I'
                    && ($s[$i + 1] == 'V' || $s[$i + 1] == 'X'))
                || ($s[$i] == 'X'
                    && ($s[$i + 1] == 'L' || $s[$i + 1] == 'C'))
                || ($s[$i] == 'C'
                    && ($s[$i + 1] == 'D' || $s[$i + 1] == 'M'))
            )
                $sum -= $romanAlpha[$s[$i]];
            else
                $sum += $romanAlpha[$s[$i]];
        }
        return $sum;
    }
}

$sol = new Solution();
$sol->romanToInt("MCMXCIV");

//TEST CASES
// "III"
// "LVIII"
// "MCMXCIV"
