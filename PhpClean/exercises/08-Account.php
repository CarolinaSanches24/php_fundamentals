<?php

class Account
{
    private int $totalWithdrawn = 0; 
    private int $totalDeposited = 0;  
    private int $balanceInCents;

    public function __construct(private string $cardholderName, private int $accountNumber, float $initialBalance)
    {
        
        $this->balanceInCents = $this->toCents($initialBalance);
    }

    private function toCents(float $value): int
    {
        return intval($value * 100);
    }

    private function toReais(int $valueInCents): float
    {
        return $valueInCents / 100;
    }

    public function withdraw(float $value): void
    {
        $valueInCents = $this->toCents($value);

        if ($valueInCents <= 0 || $valueInCents > $this->balanceInCents) {
            throw new RuntimeException("Saldo insuficiente ou valor inválido!");
        }

        $this->balanceInCents -= $valueInCents;
        $this->totalWithdrawn += $valueInCents;
    }

    public function deposit(float $valueDeposit): void
    {
        $valueInCents = $this->toCents($valueDeposit);

        if ($valueInCents <= 0) {
            throw new RuntimeException("Deposite um valor positivo, por favor!");
        }

        $this->balanceInCents += $valueInCents;
        $this->totalDeposited += $valueInCents;
    }

    public function showInfoAccount(): void
    {
        echo "Saldo atual: R$" . number_format($this->toReais($this->balanceInCents), 2, ',', '.') . "\n" .
             "Titular da conta: " . $this->getCardholderName() . "\n" .
             "Número da conta: " . $this->getAccountNumber() . "\n" .
             "Total depositado: R$" . number_format($this->toReais($this->totalDeposited), 2, ',', '.') . "\n" .
             "Total sacado: R$" . number_format($this->toReais($this->totalWithdrawn), 2, ',', '.') . "\n";
    }

    public function getCardholderName(): string
    {
        return $this->cardholderName;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }
}

$createAccount = new Account('Carolina Sanches', 111111, 100); 
$createAccount->deposit(500);   
$createAccount->deposit(500);   
$createAccount->withdraw(50); 
$createAccount->withdraw(50); 
$createAccount->showInfoAccount();
