<?php
class PokerDice
{

    private static array $faces = ['As', 'K', 'Q', 'J', '7', '8'];
    private ?string $currentFace = null; //?string means: can be a string or null
    private static int $totalRolls = 0;


    public function rollDice(): string
    {
        $this->currentFace = self::$faces[array_rand(self::$faces)];
        self::$totalRolls++;
        return $this->currentFace;
    }


    public function getFace(): string
    {
        return $this->currentFace ?? "Dice hasn't been rolled :-("; //if its null return message
    }


    public static function getTotalRolls(): int
    {
        return self::$totalRolls;
    }
}
?>