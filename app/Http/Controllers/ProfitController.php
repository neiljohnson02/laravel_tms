<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Africapackage;
use App\Africapayment;
// add your other models here

class ProfitController extends Controller
{
    public function profitDashboard()
    {
        // Fetch all related data
        $africaPackages = Africapackage::all();
        $africaPayments = Africapayment::all();

        // Fetch other tables similarly
        // $asiaPackages = AsiaPackage::all();
        // $asiaPayments = AsiaPayment::all();
        // ... etc

        // Calculate totals or other sums here if you want backend aggregation:
        $totalAfricaPayment = $africaPayments->sum('amount_paid'); // Adjust field name
        $totalAfricaPackageCost = $africaPackages->sum('cost_price'); // Adjust field name

        // Pass everything to the view
        return view('dashboard.profitdashboard', compact(
            'africaPackages',
            'africaPayments',
            // 'asiaPackages', 'asiaPayments', ...
            'totalAfricaPayment',
            'totalAfricaPackageCost'
        ));
    }
}


?>