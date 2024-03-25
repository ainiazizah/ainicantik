<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showReceipt($id)
    {
        $transaction = Transaction::find($id);
        // Pastikan transaksi ditemukan sebelum melanjutkan
        if (!$transaction) {
            return abort(404);
        }
        return view('receipt', compact('transaction'));
    }
}
