<?php

require 'src/Conta.php';
require 'src/Titular.php';

$cc = new Conta(new Titular('02223621201','Adriano Gomes'));

echo $cc->getSaldo() . PHP_EOL;