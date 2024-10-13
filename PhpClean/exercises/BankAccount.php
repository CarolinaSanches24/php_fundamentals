<?php

class BankAccount{

    public readonly string $name;
    public readonly int $number;
    public float $initialBalance;
    public readonly AccountType $type;

    public function __construct(string $name, int $number, float $initialBalance, AccountType $type)
    {
        $this->name = $name;
        $this->number = $number;
        $this->initialBalance = $initialBalance;
        $this->type = $type;
    }

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->initialBalance += $amount;
        }
    }

    public function withdraw(float $amount): void
    {
        if ($amount > 0 && $this->initialBalance >= $amount) {
            $this->initialBalance -= $amount;
        }
    }

    public function checkBalance(): float
    {
        return $this->initialBalance;
    }
}