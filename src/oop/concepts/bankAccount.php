<?php
namespace App\OOP\Concepts;

class BankAccount
{
    private int $balance;
    private string $accountNumber;
    private string $accountHolder;

/**
 * BankAccount constructor.
 *
 * @param int $balance The initial balance of the bank account.
 * @param string $accountNumber The unique identifier for the bank account.
 * @param string $accountHolder The name of the account holder.
 */

    public function __construct(int $balance, string $accountNumber, string $accountHolder)
    {
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
    }
    
    /**
     * Gets the balance of the account.
     *
     * @return int The balance of the account.
     */
    public function getBalance(): int
    {
        return $this->balance;
    }
    
    /**
     * Gets the account number of the account.
     *
     * @return string The account number of the account.
     */
    public function getAccountNumber(): string
    {
        return $this->accountHolder;
    }

    /**
     * Gets the account holder's name.
     *
     * @return string The account holder's name.
     */

     public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    /**
     * Deposits an amount into the account.
     *
     * @param int $amount The amount to deposit.
     */

    public function deposit(int $amount): void
    {
        $this->balance += $amount;
    }

    /**
     * Withdraws an amount from the account.
     *
     * @param int $amount The amount to withdraw.
     */
    public function withdraw(int $amount): void
    {
        $this->balance -= $amount;
    }

    /**
     * Transfers an amount from the current account to another account.
     *
     * @param int $amount The amount to transfer.
     * @param BankAccount $account The account to transfer the amount to.
     */
    public function transfer(int $amount, BankAccount $account): void
    {
        $this->withdraw($amount);
        $account->deposit($amount);
    }
}       
