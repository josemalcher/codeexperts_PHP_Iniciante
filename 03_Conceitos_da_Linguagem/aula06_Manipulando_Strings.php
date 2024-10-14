<?php

$name = "JOSE Malcher Jr.";

// print strlen($name);

// $name2 = substr($name, 0, 2);

// print $name2;

// $name = str_replace("J", "C", $name);
// print $name;

$name = strtoupper($name);
print $name;

$name = strtolower($name);
print $name;


$name = "Nanderson";

/**
 * Contando caracteres
 */
// print strlen($name);

/*
Pegando pedaços especificos
de uma string
 */
// $name = substr($name, 0, 5);

/**
 * Fazendo replace
 * em strings
 */
$name = str_replace("N", "T", $name);

/**
 * Colocando String
 * em Maiusculo
 */
$name = strtoupper($name);

/**
 * Colocando String
 * em Minusculo
 */
$name = strtolower($name);

print $name;
