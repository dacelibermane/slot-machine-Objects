<?php declare(strict_types=1);

namespace App;

class SymbolCollection
{
    private array $symbols = [];

    public function __construct()
    {
        $this->addSymbols(new Symbol("#", 1));
        $this->addSymbols(new Symbol("@", 4));
        $this->addSymbols(new Symbol("Q", 3));
        $this->addSymbols(new Symbol("R", 1));
    }

    public function addSymbols(Symbol $symbol):Symbol
    {
        return $this->symbols[] = $symbol;
    }

    public function getRandomSymbols():Symbol
    {
        $randSymbols = [];
        foreach ($this->symbols as $symbol){
            $randSymbols [] = $symbol;
        }
        return $randSymbols[array_rand($randSymbols)];
    }

}