<?php

class PokemonFight
{
    private int $roundNumber = 0;

    /**
     * @var RoundInfos[]
     */
    private array $roundInfos = [];
    public function __construct(
        private Pokemon $pokemon1,
        private Pokemon $pokemon2
    ){}

    /**
     * @return array
     */
    public function getRoundInfos(): array
    {
        return $this->roundInfos;
    }

    public function round(): bool {
        if (!$this->pokemon1->isDead() && !$this->pokemon2->isDead()) {
            $this->roundNumber++;
            $player1Attaque = $this->pokemon1->attack($this->pokemon2);
            $player2Attaque = $this->pokemon2->attack($this->pokemon1);
            $roundInfo = new RoundInfos($this->roundNumber, $player1Attaque, $player2Attaque );
            $this->roundInfos[] = $roundInfo;
            return true;
        }
        return false;
    }
    public function play(): void {
        while($this->round()) {}
    }
    /**
     * @return int
     */
    public function getRoundNumber(): int
    {
        return $this->roundNumber;
    }

    /**
     * @param int $roundNumber
     */
    public function setRoundNumber(int $roundNumber): void
    {
        $this->roundNumber = $roundNumber;
    }

    public function getFighters(): array {
        return [$this->pokemon1,$this->pokemon2];
    }

    public function getWinner(): false | Pokemon {
        if (!$this->pokemon1->isDead() && !$this->pokemon2->isDead()) {
            return false;
        }
        return $this->pokemon1->getHp() > $this->pokemon2->getHp() ? $this->pokemon1 : $this->pokemon2;
    }
}