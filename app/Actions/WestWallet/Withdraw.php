<?php

namespace App\Actions\WestWallet;

use WestWallet\WestWallet\Client;
use WestWallet\WestWallet\CurrencyNotFoundException;

class Withdraw
{
    public function run($request)
    {
        $client = new Client(env("PUBLIC_TOKEN_WESTWALLET"), env("PRIVATE_TOKEN_WESTWALLET"));

        try {
            $amount = $request->amount;
            $address = $request->address;
            $currency = "BTC";
            $tx = $client->createWithdrawal($currency, $amount, $address);
            return response()->json(["hash" => $tx['blockchain_hash']]);
        } catch (\Exception $e) {
            return response()->json(["message" => "Ошибка", "errors" => ["balance"=> ["Ошибка! Возможно у Вас не хватает средств"]]], 404);
        }
    }
}
