<?php 

class Car {


    public function __construct(
        public $brand = 'fiesta', 
        public $color = 'red', 
        public $speed = 0, 
        private $strengh = 4,
        private $maxSpeed = 200    
    ) {}


    function freiner($vitesse) {
        $this->speed = (($this->speed - $vitesse) < 0) ? 0 : $this->speed - $vitesse;  
    }
    function accelerer($vitesse) {
        $this->speed = (($this->speed + $vitesse) > $this->maxSpeed) ? $this->maxSpeed : $this->speed + $vitesse;  
    }
        
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

     public function tableauDeBord() {
        echo PHP_EOL."Je suis une voiture".PHP_EOL;
        echo "Je suis de la marque {$this->getBrand()}. J'ai {$this->getStrengh()} cheveaux sous le capot.";
    }



}