<?php


class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular; 
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function getSaldo():float 
    {
        return $this->saldo;
    }

    public function getNome(): string
    {
        return $this->titular->getNome();
    }
    public function getCpf(): string
    {
        return $this->titular->getCpf();
    }
}