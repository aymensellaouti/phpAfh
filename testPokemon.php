<?php
include_once 'class/Pokemon.php';
include_once 'class/AttackPokemon.php';
include_once 'class/PokemonFight.php';

$dracauFeuGigamaxAttackPokemon = new AttackPokemon(10, 100, 2, 20);
$dracauFeuGigamax = new Pokemon('Dracaufeu Gigamax', 'https://www.pokepedia.fr/Pok%C3%A9mon_n%C2%B00006_Gigamax', 200, $dracauFeuGigamaxAttackPokemon);
$pikachuGigamaxAttackPokemon = new AttackPokemon(10, 100, 2, 20);
$pikachuFeuGigamax = new Pokemon('Pikachu Gigamax', 'https://www.pokepedia.fr/Pok%C3%A9mon_n%C2%B00025_Gigamax', 150, $pikachuGigamaxAttackPokemon);
//echo $attackPokemon->attackPoints();
//echo PHP_EOL."***********".PHP_EOL;
//echo $attackPokemon->attackPoints();
//echo PHP_EOL."***********".PHP_EOL;
//echo $attackPokemon->attackPoints();
//echo PHP_EOL."***********".PHP_EOL;
//echo $attackPokemon->attackPoints();