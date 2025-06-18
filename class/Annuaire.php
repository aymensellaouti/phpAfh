<?php
include_once 'Personne.php';
include_once 'idatatable.php';
include_once 'icrud.php';
class Annuaire implements Icrud, IDatatable
{
    private $personnes  = [];

    public function __construct(private int $nbMaximum)
    {
    }
    public function add($person)
    {
        if (count($this->personnes) < $this->nbMaximum)
            $this->personnes[] = $person;
    }
    function findAll(): array
    {
        return $this->personnes;
    } //qui retourne un tableau d’éléments
    function getHead(): array
    {
        return ['name', 'age', 'num'];
    }
    function getData(): array
    {
        return $this->personnes;
    }
}
