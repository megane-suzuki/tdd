<?php

namespace App;

class Franc extends Money
{
    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Franc
     */
    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }
}