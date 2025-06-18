<?php
class AttackPokemon
{
    private int $minAttack;
    private int $maxAttack;
    private int $specialAttack;
    private int $probabilitySpecialAttack;

    /**
     * @param int $minAttack
     * @param int $maxAttack
     * @param int $specialAttack
     * @param int $probabilitySpecialAttack
     */
    public function __construct(int $minAttack, int $maxAttack, int $specialAttack, int $probabilitySpecialAttack)
    {
        $this->minAttack = $minAttack;
        $this->maxAttack = $maxAttack;
        $this->specialAttack = $specialAttack;
        $this->probabilitySpecialAttack = $probabilitySpecialAttack;
    }


    /**
     * @return int
     */
    public function getMinAttack(): int
    {
        return $this->minAttack;
    }

    /**
     * @param int $minAttack
     */
    public function setMinAttack(int $minAttack): void
    {
        $this->minAttack = $minAttack;
    }

    /**
     * @return int
     */
    public function getMaxAttack(): int
    {
        return $this->maxAttack;
    }

    /**
     * @param int $maxAttack
     */
    public function setMaxAttack(int $maxAttack): void
    {
        $this->maxAttack = $maxAttack;
    }

    /**
     * @return int
     */
    public function getSpecialAttack(): int
    {
        return $this->specialAttack;
    }

    /**
     * @param int $specialAttack
     */
    public function setSpecialAttack(int $specialAttack): void
    {
        $this->specialAttack = $specialAttack;
    }

    /**
     * @return int
     */
    public function getProbabilitySpecialAttack(): int
    {
        return $this->probabilitySpecialAttack;
    }

    /**
     * @param int $probabilitySpecialAttack
     */
    public function setProbabilitySpecialAttack(int $probabilitySpecialAttack): void
    {
        $this->probabilitySpecialAttack = $probabilitySpecialAttack;
    }

    public function attackPoints(): int {
        $simpleAttaque = rand($this->minAttack, $this->maxAttack);
        $isSpecialAttaqueProbability = rand(0,100);
//        echo "probabilitySpecialAttack: $this->probabilitySpecialAttack".PHP_EOL;
//        echo "isSpecialAttaqueProbability: $isSpecialAttaqueProbability".PHP_EOL;
        $isSpecialAttaque = $isSpecialAttaqueProbability <= $this->probabilitySpecialAttack ? 1 : 0 ;
//        echo "simpleAttaque : $simpleAttaque".PHP_EOL;
//        echo "isSpecialAttaque : $isSpecialAttaque".PHP_EOL;
        return $isSpecialAttaque ?  ($simpleAttaque * $this->specialAttack) : $simpleAttaque;
    }

}