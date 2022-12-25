<?php


namespace App;


class NumberChecker
{

    public function execute($number): bool
    {
        $checks = [
            IsDivisibleByTwo::class,
            ContainsZeros::class,
            IsNegative::class,
            HasFourDigit::class
        ];
        return (new CompositeChecker($checks))->check($number);
    }


}