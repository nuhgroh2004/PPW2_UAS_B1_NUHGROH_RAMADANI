<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $transaksi_count = 0;
        return view('dashboard', compact('transaksi_count'));
    }
}
