<?php

require __DIR__ .'/BankAccount.php';
require __DIR__ .'/AccountType.php';

class CurrentAccount extends BankAccount{

    private const WITHDRAWAL_TAX = 0.02;
    private const MONTHLY_FEE = 200.00; 

    public function chargeMonthlyFee(): void
    {
        if ($this->type === AccountType::Current) {
            $this->initialBalance -= self::MONTHLY_FEE;
        }
    }

    #[Override]
    public function withdraw(float $amount): void
    {
        $totalWithdrawal = $amount + ($amount * self::WITHDRAWAL_TAX);

        if ($totalWithdrawal > 0 && $this->initialBalance >= $totalWithdrawal) {
            $this->initialBalance -= $totalWithdrawal;
        }
    }

    public function showInfo():string{
        return "Nome do titular: $this->name \n".
        "Número da conta: $this->number \n".
        "Taxa de saque: ".self ::WITHDRAWAL_TAX ."\n".
        "Tarifa mensal: ". self::MONTHLY_FEE ."\n".
        "Valor após as taxas : $this->initialBalance\n";
    }
}

$account = new CurrentAccount('Carolina',11111,0,AccountType::Current);
$account->deposit(500);

$account->chargeMonthlyFee();
$account->withdraw(50);
echo $account->showInfo();