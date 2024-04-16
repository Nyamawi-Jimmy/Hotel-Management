<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    public function allInvoices()
    {
  $allInvoices= DB::table("accounts")->get();
  return view("Accounts.invoices",compact("allInvoices"));
    }
    public function allPayments()
    {
        $allPayments= DB::table("accounts")->get();
        return view("Accounts.payment",compact("allPayments"));
    }
    public function allExpenses()
{
    $allExpenses= DB::table("accounts")->get();
    return view("Accounts.expenses",compact("allExpenses"));
}


}
