<?php
require_once "OperacionSalgoInsuficiente.php";
class Cuenta
{
    private $titular;
    private $saldo;

    public function __construct($titular, $saldo = 0)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function retirar($montoRetirar)
    {
        if ($montoRetirar < 0) {
            throw new Exception("La cantidad no puede ser negativa");
        }
        $saldoAux = $this->saldo - $montoRetirar;
        if ($saldoAux < 0) {
            throw new OperacionSalgoInsuficiente("no tiene suficiente saldo");
        }
        //$this->saldo -= $montoRetirar;
        $this->saldo = $this->saldo - $montoRetirar;
    }
    public function depositar($montoDepositar)
    {
        if ($montoDepositar < 0) {
            throw new Exception("La cantidad no puede ser negativa");
        }
        $this->saldo += $montoDepositar;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getTitular()
    {
        return $this->titular;
    }
}
