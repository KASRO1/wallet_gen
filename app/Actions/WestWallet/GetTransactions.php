<?php

namespace App\Actions\WestWallet;

use App\Models\Wallet;
use WestWallet\WestWallet\Client;
use WestWallet\WestWallet\CurrencyNotFoundException;

class GetTransactions
{
    public function run()
    {
        $client = new Client(env("PUBLIC_TOKEN_WESTWALLET"), env("PRIVATE_TOKEN_WESTWALLET"));

        try {
            $transactions = $client->transactionsList("BTC");
            return $transactions['result'];
        } catch (\Exception $e) {
            return false;
        }
    }
}
