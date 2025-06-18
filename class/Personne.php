<?php



class Personne
{
    const TAX = 100;
    public function __construct(
        private $name,
        private $age,
        private int $num
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getNum(): int
    {
        return $this->num;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }
    }
}
