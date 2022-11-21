<?php declare(strict_types=1);

namespace App;

class Combinations
{
    private array $linePayout = [3 => 1, 4 => 2, 5 => 3];
    private int $moneyWon = 0;

    public function getCombinations(): array
    {
        return
            [
                //Horizontal
                [[0, 0], [0, 1], [0, 2], [0, 3], [0, 4]],
                [[1, 0], [1, 1], [1, 2], [1, 3], [1, 4]],
                [[2, 0], [2, 1], [2, 2], [2, 3], [2, 4]],
                //Vertical
                [[0, 0], [1, 0], [2, 0]],
                [[0, 1], [1, 1], [2, 1]],
                [[0, 2], [1, 2], [2, 2]],
                [[0, 3], [1, 3], [2, 3]],
                [[0, 4], [1, 4], [2, 4]],
                //Combo
                [[0, 0], [1, 1], [2, 2], [1, 3], [0, 4]],
                [[0, 0], [1, 1], [2, 2], [2, 3]],
                [[0, 0], [1, 1], [2, 0]],
                [[0, 3], [1, 2], [2, 3]]
            ];
    }

    public function getWinnings(Board $board, Player $player, SymbolCollection $symbols)
    {
        foreach ($this->getCombinations() as $combination) {
            $counter = 0;
            $symbol = '';

            foreach ($combination as $position) {
                [$x, $y] = $position;
                if (!$symbol) {
                    $symbol = $board[$x][$y];
                }

                if ($symbol != $board[$x][$y]) {
                    break;
                }
                $counter++;
            }

            if ($counter >= 3) {
               $this->moneyWon += $symbols[$symbol] * ($this->linePayout[$counter] + $player->getCostPerSpin());

            }
        }
        return $this->moneyWon;
    }
}


