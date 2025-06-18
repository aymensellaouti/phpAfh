<?php
require_once 'AttackPokemon.php';
class Pokemon
{
    protected string $name;

    protected string $url;
    protected int $hp;
    protected AttackPokemon $attackPokemon;

    /**
     * @param string $name
     * @param string $url
     * @param int $hp
     * @param AttackPokemon $attackPokemon
     */
    public function __construct(string $name, string $url, int $hp, AttackPokemon $attackPokemon)
    {
        $this->name = $name;
        $this->url = $url;
        $this->hp = $hp;
        $this->attackPokemon = $attackPokemon;    
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     */
    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    /**
     * @return AttackPokemon
     */
    public function getAttackPokemon(): AttackPokemon
    {
        return $this->attackPokemon;
    }
    /**
     * @param AttackPokemon $attackPokemon
     */
    public function setAttackPokemon(AttackPokemon $attackPokemon): void
    {
        $this->attackPokemon = $attackPokemon;
    }



    public function isDead(): bool {return $this->hp <= 0;}
    public function attack(Pokemon $pokemon): int {
        $attaque = $this->attackPokemon->attackPoints();
        $pokemon->hp-= $attaque;
        return $attaque;
    }
    public function whoAmI(): void {

    }

    public function getCard() {
        $name = $this->getName();
        $url = $this->getUrl();
        $card = "
                <div class='card-header class-header-primary'>
                {$name}
                <img
                    class='rounded-circle'
                    src='{$url}'
                    width='150px'
                    height='150px'
                    alt='pikachuFeuGigamax'>
            </div>";
        return $card;
    }
}