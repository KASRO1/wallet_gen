<?php

namespace App\Actions\User;

use App\Actions\WestWallet\GetBalance;
use App\Actions\WestWallet\GetTransactions;
use App\Models\Wallet;

class Dashboard
{
    public function run($request)
    {
        $wallet_adress = $request->cookie("address");
        $wallets_count = Wallet::all()->count();
        $balance = (new GetBalance())->run();
        $transactions = (new GetTransactions())->run();
        if(!$balance){
            $balance = "Error";
        }
        else{
            $balance = $balance["balance"];
        }
        return view("index", ["wallet_adress" => $wallet_adress, "wallets_count" => $wallets_count, "balance" => $balance, "transactions" => $transactions]);
    }
}
