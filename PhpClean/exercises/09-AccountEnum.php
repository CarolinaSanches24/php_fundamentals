<?php 

 enum AccountTypes {
    
    case CurrentAccount;
    case AccountInvestment;
    case SavingsAccount;
    case UniversityAccount;

    public function hasAfee():string
    {
       $result = match($this){
            AccountTypes::CurrentAccount, AccountTypes::AccountInvestment => 'Possui taxa',
            AccountTypes::SavingsAccount , AccountTypes::UniversityAccount => 'Sem taxa',
       };

       return 'A conta é do tipo ' . $this->name . " é $result \n";
    }
 }
