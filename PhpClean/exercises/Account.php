<?php 

require __DIR__ .'/09-AccountEnum.php';

class Account {

    private int $balanceInCents; 
    private int $totalWithdrawn = 0; 
    private int $totalDeposited = 0; 

    public function __construct(
        public readonly AccountTypes $type,
        public readonly string $name,)
    {
        $this->balanceInCents = 0;
    }

    public function withdraw(float $valueWithdraw): void
    {
        if ($valueWithdraw <= 0 || $valueWithdraw> $this->balanceInCents) {
            throw new RuntimeException("Saldo insuficiente ou valor inválido!");
        }

        $this->balanceInCents -= $valueWithdraw;
        $this->totalWithdrawn += $valueWithdraw;
    }

    public function deposit(float $valueDeposit): void
    {

        if ($valueDeposit <= 0) {
            throw new RuntimeException("Deposite um valor positivo, por favor!");
        }

        $this->balanceInCents += $valueDeposit;
        $this->totalDeposited += $valueDeposit;
    }

    public function showInfoAccount(): void
    {
        echo "Titular da conta: " . $this->name . "\n" .
             "Total depositado: R$" . number_format($this->totalDeposited, 2, ',', '.') . "\n" .
             "Total sacado: R$" . number_format ($this->totalWithdrawn , 2, ',', '.') . "\n".
             "Saldo atual: R$" . number_format($this->balanceInCents, 2, ',','.') ."\n",
             $this->type->hasAFee();
    }
};

$newAccount = new Account(AccountTypes::SavingsAccount,'Carol Sanches');
$newAccount->deposit(200);
$newAccount->withdraw(100);
$newAccount->showInfoAccount();