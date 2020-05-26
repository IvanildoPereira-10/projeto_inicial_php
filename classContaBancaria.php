<?php
abstract class Banco
{
    private $saldo = 0;
    protected $taxa = 10;
    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function __construct($valorInicial)
    {
        $this->depositar($valorInicial);
        $this->saldo -= $this->taxa;

    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getTaxa()
    {
        return $this->taxa;
    }
    protected function sortear()
    {
        $this->saldo += 5;
    }
    public function saque($valor)
    {
        $this->saldo -= $valor;
    } 
    #abstract public function saque($valor);
}

trait Exemple
{
    public function digaOla()
    {
        echo "Olá";
    }
}

class Itau extends Banco
{
    use Exemple;
    /*public function saque($valor)
    {
        $this->saldo -= $valor;
    }  */  
}
$conta = new Itau(50);
$conta->depositar(100);
$conta->digaOla().'<br>';
$conta->saque(20);
echo "Saldo: ".$conta->getSaldo().'<br>';
echo 'Taxa: '.$conta->getTaxa();

