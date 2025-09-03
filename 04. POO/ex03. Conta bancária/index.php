<?php

class bankAccount {
    public $accountHolder;
    private $accountBalance;

    public function setAccountBalance($value) {
        $this->deposit($value);
    }
    
    public function getAccountBalance() {
        return $this->accountBalance;
    }

    /**
     * Reliza depositos de valores maiores que zero na conta.
     */
    public function deposit($value) {
        if($value > 0) {
            $this->accountBalance += $value;
        } else {
            echo 'O valor deve ser maior que zero';
        }
    }

    /**
     * Realiza saques se houver saldo suficiente
     */
    public function withdraw($value) {
        if($value > $this->accountBalance) {
            echo 'Saldo insuficiente';
        } else {
            $this->accountBalance -= $value;
        }
    }

    /**
     * Exibe o saldo atual da conta
     */
    public function showBalance() {
        echo "Titular: {$this->accountHolder} <br> Saldo atual: R$ {$this->accountBalance}";
    }
}

$account = new bankAccount();
$account->accountHolder = 'Diego';
$account->setAccountBalance(500);
$account->deposit(200);
$account->withdraw(100);
$account->showBalance();

