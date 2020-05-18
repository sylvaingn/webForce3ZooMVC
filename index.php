<?php


require __DIR__ . '/config/config.php';

$melman = new Animal;
var_dump($melman->setSpecies("Girafe"));

$zooDeLyon = new Zoo;
$zooDeLyon->setCity("Lyon");

$newId = new AnimalZoo;
$newId->setId("1");




?>

