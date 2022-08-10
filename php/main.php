<?php
class MatchCalc
{
    function getTotalDivisibleBy3Or5($num)
    {
        $total = 0;

        for ($number = 0; $number < $num; $number++)
            if ($number % 3 == 0 || $number % 5 == 0)
                $total += $number;

        return $total;
    }
}
//echo getTotalDivisibleBy3Or5(11);