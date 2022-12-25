<?php

namespace App;

class HasFourDigit implements Check
{

    /**
     * @param $number
     * @return bool
     */
    public function check($number): bool
    {
        return $number > 999 && $number < 9999;
    }
}