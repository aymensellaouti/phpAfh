<?php 

class Car {
    private string $brand;
    private string $color;
    private int $speed = 0;
    private int $strengh = 0;
    
    

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
}