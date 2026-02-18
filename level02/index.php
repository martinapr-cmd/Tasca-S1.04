<?php

require_once 'PokerDice/PokerDice.php';


$dice1 = new PokerDice();
echo "Result: " . $dice1->rollDice() . "\n";
echo "Current face: " . $dice1->getFace() . "\n";


$diceArray = [];

// Create 5 dice and roll them
for ($i = 0; $i < 5; $i++) {
    $diceArray[] = new PokerDice();
}

for ($i = 0; $i < count($diceArray); $i++) {
    echo "Dice " . ($i + 1) . ": " . $diceArray[$i]->rollDice() . "\n";
}

// Show total rolls
echo "Total rolls: " . PokerDice::getTotalRolls();


?>