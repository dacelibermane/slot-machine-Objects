<?php declare(strict_types=1);

require_once "vendor/autoload.php";

use App\Board;
use  App\SymbolCollection;
use App\Player;


echo "\nWelcome!\nCost per spin is 5 coins. \n";
$player = new Player((int)readline("Please insert money to begin the game <<<\n"));


while ($player->getCredit() < $player->getCostPerSpin()) {
    echo "You inserted " . $player->getCredit() . ".\n";
    $player->addCoins((int)readline("\nPlease insert more coins: "));

    if ($player->getCredit() === $player->getCostPerSpin()) {
        break;
    }
}

$board = new Board(3, 5);
$board->addRandomSymbols($symbols = new SymbolCollection());
echo $board->displayBoard();





