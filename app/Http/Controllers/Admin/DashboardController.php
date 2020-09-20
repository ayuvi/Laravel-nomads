<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\TravelPackage;
Use App\Transaction;

class DashboardController extends Controller
{
    public function index(request $request)
    {
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transactional_status','PENDING')->count(),
            'transaction_success' => Transaction::where('transactional_status','SUCCESS')->count(),
            ]);
    }
}
