<?php

namespace App\Actions\WestWallet;

use App\Models\Wallet;
use WestWallet\WestWallet\Client;
use WestWallet\WestWallet\CurrencyNotFoundException;

class GenWallet
{
    public function run()
    {
        $client = new Client(env("PUBLIC_TOKEN_WESTWALLET"), env("PRIVATE_TOKEN_WESTWALLET"));

        try {
            $address = $client->generateAddress("BTC");
            $address = $address["address"];
            $adress_model = new Wallet();
            $adress_model->address = $address;
            $adress_model->save();
            $response = response()->json(["address" => $address]);
            return $response->withCookie(cookie()->forever("address", $address));
        } catch (\Exception $e) {
            return response()->json(["error" => "Currency not found"], 404);
        }
    }
}
