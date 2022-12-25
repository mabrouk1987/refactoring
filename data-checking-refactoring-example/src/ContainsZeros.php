<?php

namespace App;

class ContainsZeros implements Check
{

    /**
     * @param $number
     * @return false|int
     */
    public function check($number)
    {
        return strpos((string)$number, '0');
    }
}