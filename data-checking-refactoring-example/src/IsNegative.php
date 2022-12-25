<?php

namespace App;

class IsNegative implements Check
{

    /**
     * @param $number
     * @return bool
     */
    public function check($number): bool
    {
        return $number < 0;
    }
}