<?php declare(strict_types=1);

namespace App;

class Player
{
    private int $credit;
    private int $costPerSpin = 5;

    public function __construct(int $credit = 0){
        $this->credit = $credit;
    }

    public function getCredit(): int
    {
        return $this->credit;
    }

    public function getCostPerSpin(): int
    {
        return $this->costPerSpin;
    }

    public function addCoins($coins):int
    {
        $this->credit += $coins;
        return $this->getCredit();
    }
    public function payForSpin():int
    {
        return ($this->credit - $this->costPerSpin);
    }
}
