<?php

require_once 'FizzBuzz.php';

$domanda = (int) $argv[1];

$fizzbuzz = new FizzBuzz();
$risultato = $fizzbuzz->rispondi($domanda);

print "Dato $domanda, rispondo $risultato!\n";
