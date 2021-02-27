<?php

require 'Conta.php';
require 'Titular.php';

$cc = new Conta(new Titular('02223621201','Adriano Gomes'));

echo $cc->getSaldo() . PHP_EOL;