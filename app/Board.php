<?php declare(strict_types=1);

namespace App;

class Board
{
    private array $board = [[]];
    private int $row;
    private int $column;

    public function __construct(int $row, int $column)
    {
        $this->row = $row;
        $this->column = $column;
    }

    public function addRandomSymbols(SymbolCollection $symbols): array
    {
        for ($row = 0; $row < $this->row; $row++) {
            for ($column = 0; $column < $this->column; $column++) {
                $this->board[$row][$column] = $symbols->getRandomSymbols()->getSymbol();
            }
        }
        return $this->board;

    }

  public function displayBoard():string
  {
      $display = '';
      foreach ($this->board as $row){
          foreach ($row as $value){
             $display .= "| $value |";
          }
          $display .= PHP_EOL;
          $display .= "==========================\n";
      }
    return $display;
  }
}