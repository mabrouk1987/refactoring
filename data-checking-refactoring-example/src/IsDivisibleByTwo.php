<?php

namespace App;

class IsDivisibleByTwo implements Check
{

    /**
     * @param $number
     * @return bool
     */
    public function check($number): bool
    {
        return $number % 2 === 0;
    }
}