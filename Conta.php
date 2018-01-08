<?php 

class Conta {
    
    public $num_conta;
    public $tipo;
    public $dono;
    public $saldo = 0;
    public $status;
    public $agencia;

    public function __construct($dono, $tipo, $primeiro_deposito, $numero_conta, $agencia) {
        if ($tipo == 'cp' && $primeiro_deposito < 50)
        {
            echo "Você precisa depositar no mínimo R$ 50,00 para abrir uma conta poupança!";
        }else{
            $this->abrirConta($dono, $tipo, $primeiro_deposito, $numero_conta, $agencia);
        }
    }

    public function abrirConta($dono, $tipo, $primeiro_deposito, $numero_conta, $agencia)
    {
        $this->setDono($dono);
        $this->setTipo($tipo);
        $this->setNumConta($numero_conta);
        $this->setAgencia($agencia);
        $this->setStatus(true);
        $this->setSaldo($primeiro_deposito, 'depositar');
    }

    public function setNumConta($num_conta) {
        $this->num_conta = $num_conta;
    }

    public function getNumConta() {
        return $this->num_conta;
    }

    public function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    public function getAgencia() {
        return $this->agencia;
    }

    public function setTipo($t)
    {
        $this->tipo = $t;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setDono($d)
    {
        $this->dono = $d;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function setSaldo($valor, $operacao)
    {
        if($this->getStatus()) {
        
            if ($operacao == 'sacar') {
                $this->sacar($valor);
                echo 'Você Sacou R$ '.number_format($valor, 2,'.', ',').'.<br>';
                echo 'Saldo Atual R$ '.number_format($this->getSaldo(), 2,'.', ',').'.';
            }elseif($operacao == 'depositar') {   
                $this->depositar($valor);
                echo 'Você Depositou R$ '.number_format($valor, 2,'.', ',').'.<br>';
                echo 'Saldo Atual R$ '.number_format($this->getSaldo(), 2,'.', ',').'.';
            }
        }

    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setStatus($s)
    {
        $this->status = $s;
    }

    public function getStatus() {
        return $this->status;
    }

    public function fecharConta($situacao)
    {
        switch ($situacao) {
            case 'debito';
                echo 'Você possui R$ '.number_format(getSaldo()).'na conta do GNB.<br>';
                echo 'Saque todo o valor e tente novamente.';
                echo '<button>Realizar Saque</button>';
                break;
            case 'credito';
                echo 'Você possui um débito de R$ '.number_format(getSaldo()).'na sua conta do GNB.<br>';
                echo 'Realize o pagamento e tente novamente<br>';
                echo '<button>Realizar Depósito</button>';
                break;
            default;
                $this->setStatus($situacao);
                
       }
    }








}