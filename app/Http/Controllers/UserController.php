<?php

namespace App\Http\Controllers;

use App\Actions\User\Dashboard;
use App\Actions\WestWallet\Withdraw;
use App\Http\Requests\WithdrawRequest;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Actions\WestWallet\GenWallet;

class UserController extends Controller
{

    public function index(Request $request)
    {
        return (new Dashboard())->run($request);
    }

    public function withdraw(WithdrawRequest $request)
    {
        return (new Withdraw())->run($request);
    }

    public function indexGen()
    {
        return view("sign-up");
    }

    public function generateWallet()
    {
        return (new GenWallet())->run();
    }
}
