<?php declare(strict_types=1);

require_once "vendor/autoload.php";

use App\Board;
use  App\SymbolCollection;

$userCoins = 0;
$creditsPerSpin = 5;

echo "\nWelcome!\nCost per spin is 5 coins. \n";
$userCoins = (int)readline("Please insert money to begin the game <<<\n");

while ($userCoins < $creditsPerSpin) {
    echo "You inserted " . $userCoins . ".\n";
    $addCoins = (int)readline("\nPlease insert more coins: ");
    $userCoins += $addCoins;

    if ($userCoins === $creditsPerSpin) {
        break;
    }
}

$board = new Board(3, 5);
$board->addRandomSymbols($symbols = new SymbolCollection());
echo $board->dispalyBoard();





