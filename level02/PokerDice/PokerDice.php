<?php
class PokerDice {


private array $faces; 
private ?string $currentFace = null; //?string means: can be a string or null
private static int $totalRolls = 0; 

public function __construct() {
    $this->faces = ['As', 'K', 'Q', 'J', '7', '8'];
}


public function rollDice(): string {
    $this->currentFace = $this->faces[array_rand($this->faces)];
    self::$totalRolls++; 
    return $this->currentFace;
}


public function getFace(): string {
    return $this->currentFace ?? "Dice hasn't been rolled :-("; //if its null return message
}


public static function getTotalRolls(): int {
    return self::$totalRolls;
}

}
?>