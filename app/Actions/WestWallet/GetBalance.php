<?php

namespace App\Actions\WestWallet;

use WestWallet\WestWallet\Client;

class GetBalance
{
    public function run()
    {
        $client = new Client(env("PUBLIC_TOKEN_WESTWALLET"), env("PRIVATE_TOKEN_WESTWALLET"));

        try {
            $balance = $client->walletBalance("BTC");
            return $balance;
        } catch (\Exception $e) {
            return false;
        }
    }
}
