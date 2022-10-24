<?php

class ContaBanco{
    
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Metodos
    public function abrirConta($t){

        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "CC"){
            $this->setSaldo(50);
        }elseif ($t == "CP"){
            $this->setSaldo(150);
        }

    }

    public function fecharConta(){

        if ($this->getSaldo() > 0){
            echo "<p> ERRO! Conta ainda tem dinheiro. </p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p> ERRO! Conta está em débito. </p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
        }
    }

    public function depositar($v){

        if ($this->getStatus())/*($this->status == true)*/{
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Déposito de R$ $v na conta {$this->getDono()}</p>";
        }else {
            echo "<p> ERRO! Conta fechada.</p>";
        }
    }

    public function sacar($v){

        if ($this->getStatus()){
            if ($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta da {$this->getDono()}</p>";
            }else{
                echo "<p> ERRO! Saldo insulficiente.</p>";
            }
        }else{
            echo "<p>ERRO! Conta Fechada.</p>";
        }
    }

    public function pagarMensal(){

        if ($this->getTipo() == "CC"){
            $v = 12;
        }elseif ($this->getTipo() == "CP"){
            $v = 20;
        }

        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de {$this->getDono()}</p>";
        }else{
            echo "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
    }

    //Metodos Especiais
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false); 
        echo "<p>Conta criada com sucesso!</p>"; 
    }

    public function setNumConta($n){

        $this->numConta = $n;
    }

    public function getNumConta(){

        return $this->numConta;
    }

    public function setTipo($t){

        $this->tipo = $t;
    }

    public function getTipo(){
        
        return $this->tipo;
    }

    public function setDono($d){

        $this->dono = $d;
    }

    public function getDono(){
        
        return $this->dono;
    }

    public function setSaldo($sa){

    $this->saldo = $sa;
    }

    public function getSaldo(){
        
        return $this->saldo;
    }

    public function setStatus($st){

    $this->status = $st;
    }

    public function getStatus(){
        
        return $this->status;
    }
}