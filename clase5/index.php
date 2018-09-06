<?php

require 'Tamagotchi.php';
require 'Estado.php';
require 'Triste.php';
require 'Feliz.php';
require 'Hambriento.php';
require 'Sediento.php';

$estado = new Feliz;
$tamagotchi = new Tamagotchi($estado);
$tamagotchi->comer();
$tamagotchi->tomar();
$tamagotchi->mimos();