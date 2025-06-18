<?php

interface Icrud
{
    function add(Object $element); //Ajoute element dans le tableau
    function findAll(): array; //qui retourne un tableau d’éléments
    //function findOneByCriteria(string $index, $value); // qui retourne un élément par son identifiant
    //function remove(Object $element); //qui supprime un élément de la liste 

}
