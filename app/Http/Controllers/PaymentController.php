<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showReceipt()
    {
        $id_user = auth()->user()->id;
        $transactions = Transaction::select("*")
        ->where("id", $id_user)
        ->get();
        // Pastikan transaksi ditemukan sebelum melanjutkan
        if (!$transactions) {
            return abort(404);
        }
        return view('receipt', compact('transactions'));
    }
}
