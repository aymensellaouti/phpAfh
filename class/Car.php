<?php 

class Car {


    public function __construct(
        private $brand = 'fiesta', 
        private $color = 'red', 
        private $speed = 0, 
        private $strengh = 4) {}

    /**
     * Get the value of strengh
     */ 
    public function getStrengh(): int
    {
        return $this->strengh;
    }

    /**
     * Set the value of strengh
     *
     * @return  self
     */ 
    public function setStrengh($strengh): static
    {
        if ($strengh < 300)
             $this->strengh = $strengh;
        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed): static
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color): static
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Additionne deux entiers.
     * 
     * @param int $a Le premier entier.
     * 
     * @param int $b Le deuxième entier. * 
     * @return int La somme des deux nombres. * 
     * @throws InvalidArgumentException Si l'un des paramètres n'est pas un entier. 
     * */
    function addition($a, $b) {    
        if (!is_int($a) || !is_int($b)) {        
            throw new InvalidArgumentException("Les paramètres doivent être des entiers.");    
        }    
        return $a + $b;
    }

}